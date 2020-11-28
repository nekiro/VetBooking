using Microsoft.AspNetCore.Identity.UI.Services;
using Microsoft.Extensions.Options;
using System.Net;
using System.Net.Mail;
using System.Threading.Tasks;

namespace WebPWrecover.Services
{
    public class EmailSender : IEmailSender
    {
        private readonly VetBooking.Services.MailSettings _mailSettings;
        public EmailSender(IOptions<VetBooking.Services.MailSettings> mailSettings)
        {
            _mailSettings = mailSettings.Value;
        }

        public async Task SendEmailAsync(string email, string subject, string message)
        {
            using SmtpClient client = new SmtpClient(_mailSettings.Host)
            {
                UseDefaultCredentials = false,
                EnableSsl = true,
                Credentials = new NetworkCredential(_mailSettings.Mail, _mailSettings.Password)
            };

            var mail = new MailMessage(_mailSettings.Mail, email)
            {
                Subject = subject,
                Body = message,
                IsBodyHtml = true
            };
            await client.SendMailAsync(mail);
        }
    }
}