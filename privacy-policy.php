<?php
// privacy-policy.php
// Include your site header (assumes header.php outputs the <head> and top navigation)
include './forms/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="fw-bold text-primary mb-3">Privacy Policy</h1>
            <p class="text-muted mb-1"><strong>Last updated:</strong> <?php echo date('F j, Y'); ?></p>

            <p>
                At <strong>Kaddora Medical</strong> ("we", "our", "us"), your privacy is important to us.
                This Privacy Policy explains how we collect, use, disclose, and protect your information
                when you visit or use our website and services.
            </p>

            <h4 class="mt-4">1. Information We Collect</h4>
            <p>
                We may collect and process the following information:
            </p>
            <ul>
                <li><strong>Personal Information:</strong> name, email address, phone number, postal address, date of birth (when provided), and other information you submit when you contact us or register for services.</li>
                <li><strong>Account Data:</strong> login details and profile information if you create an account.</li>
                <li><strong>Health-Related Data:</strong> only when voluntarily provided by you for a specific service (e.g., appointment booking, medical history). We treat such data as sensitive and handle it with extra care.</li>
                <li><strong>Usage Data:</strong> pages visited, time spent on pages, IP address, browser details, device type, referral source, and other analytics data.</li>
                <li><strong>Cookies & Tracking:</strong> information collected through cookies and similar technologies (see "Cookies" below).</li>
            </ul>

            <h4 class="mt-4">2. How We Use Your Information</h4>
            <p>We use information to:</p>
            <ul>
                <li>Provide, operate, and maintain our services and website.</li>
                <li>Process appointments, inquiries, and service requests.</li>
                <li>Communicate with you about updates, promotions, and support.</li>
                <li>Personalize and improve the user experience.</li>
                <li>Monitor and analyze usage and trends to improve our services.</li>
                <li>Comply with legal obligations and protect our rights.</li>
            </ul>

            <h4 class="mt-4">3. Legal Basis for Processing (If applicable)</h4>
            <p>
                If you are in a jurisdiction with data-protection laws (for example, the EU under GDPR),
                our legal bases for processing personal data include: your consent, performance of a contract,
                compliance with legal obligations, and our legitimate interests (for example to improve services).
            </p>

            <h4 class="mt-4">4. Sharing & Disclosure</h4>
            <p>We may share your information with:</p>
            <ul>
                <li><strong>Service providers:</strong> third-party vendors that help deliver our services (hosting, analytics, email delivery).</li>
                <li><strong>Medical partners:</strong> authorized healthcare providers when required for treatment or appointment fulfillment (with your consent where required by law).</li>
                <li><strong>Legal reasons:</strong> when required by law, to respond to legal process, or to protect our rights and safety.</li>
                <li><strong>Business transfers:</strong> in the event of a merger, acquisition, or sale of assets (users will be notified where required).</li>
            </ul>

            <h4 class="mt-4">5. Cookies & Tracking Technologies</h4>
            <p>
                We use cookies and similar technologies to operate the website and improve the user experience.
                Cookies can be <em>essential</em> (required for site operation), <em>performance</em> (analytics),
                or <em>functional</em> (remember settings). You can control cookies through your browser settings,
                but blocking some cookies may affect site functionality.
            </p>

            <h4 class="mt-4">6. Third-Party Services</h4>
            <p>
                We use third-party services (such as analytics providers and payment processors). These third parties
                have their own privacy policies and may collect data in accordance with their terms.
            </p>

            <h4 class="mt-4">7. Security</h4>
            <p>
                We implement reasonable administrative, technical, and physical safeguards designed to protect your
                information. No method of transmission or storage is 100% secure — we cannot guarantee absolute security.
            </p>

            <h4 class="mt-4">8. Data Retention</h4>
            <p>
                We retain personal information only as long as necessary to provide services, comply with legal obligations,
                resolve disputes, and enforce agreements. Retention periods vary depending on the nature of the data.
            </p>

            <h4 class="mt-4">9. Your Rights</h4>
            <p>
                Depending on your jurisdiction, you may have rights including access to your personal information,
                correction, deletion, restriction of processing, objection to processing, and data portability.
                To exercise these rights, please contact us using the details below.
            </p>

            <h4 class="mt-4">10. Children's Privacy</h4>
            <p>
                Our website and services are not directed to children under 13 (or under the minimum age in your jurisdiction).
                We do not knowingly collect personal information from children. If you believe we have collected such data,
                please contact us and we will remove it.
            </p>

            <h4 class="mt-4">11. International Transfers</h4>
            <p>
                If we transfer your personal information across borders (for example to service providers in other countries),
                we will take steps to ensure appropriate safeguards are in place as required by law.
            </p>

            <h4 class="mt-4">12. Changes to This Policy</h4>
            <p>
                We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated
                "Last updated" date. We encourage you to review this policy periodically.
            </p>

            <h4 class="mt-4">13. Contact Us</h4>
            <p>
                If you have questions, requests, or concerns about this Privacy Policy or our data practices,
                please contact us:
            </p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:privacy@kaddoramedical.com">privacy@kaddoramedical.com</a></li>
                <li><strong>Address:</strong> Kaddora Medical (Insert Address), City, State, Country</li>
                <li><strong>Phone:</strong> (Insert phone number)</li>
            </ul>

            <hr>

            <p class="small text-muted">
                Note: This Privacy Policy is a general template and does not constitute legal advice. For specific
                legal requirements (for example HIPAA in the U.S. or GDPR in the EU), please consult a qualified attorney
                to ensure compliance with applicable regulations.
            </p>
        </div>
    </div>
</div>

<?php
// Include your footer (assumes footer.php closes the <body> and </html>)
include 'footer.php';
?>
