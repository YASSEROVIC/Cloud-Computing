# Cloud Computing Class CIS-4355 UIW Project README

This repository contains the project files for the Cloud Computing Class CIS-4355 at the University of the Incarnate Word (UIW). The project demonstrates the use of various Amazon Web Services (AWS) to deploy a responsive web application built with HTML and Bootstrap.

## screenshot 

![Project Screenshot](https://github.com/YASSEROVIC/Cloud-Computing/blob/main/Screenshot.png?raw=true)

## Features

- One-page design that is responsive and compatible with multiple devices
- Designed using Bootstrap
- A "checkdb.php" file to verify the connection with the AWS RDS database
- A contact form that sends data through "form.php" to a MySQL database stored in AWS RDS

## AWS Services Utilized

1. **Identity and Access Management (IAM):** Provides user authentication and authorization to control access to AWS resources.

2. **AWS S3:** Scalable storage service that can store and retrieve any amount of data, used for hosting static website assets like images and stylesheets.

3. **AWS EC2:** Elastic Compute Cloud provides scalable computing capacity, allowing the deployment of applications on virtual servers.

4. **CloudFront:** A global content delivery network (CDN) that delivers the website content to users with low latency and high transfer speeds.

5. **AWS Route 53:** Domain name registration service, used to purchase and manage the domain name for the website.

6. **AWS RDS:** Relational Database Service provides a scalable and managed database, in this project, we use MySQL as the database engine.

7. **AWS Certificate Manager:** Handles the creation, storage, and management of SSL/TLS certificates to secure the website connection.

8. **CloudWatch:** Monitoring service that collects and tracks metrics, collects and monitors log files, and sets alarms for the AWS resources and applications.

## Getting Started

To set up the project on your local machine, follow these steps:

1. Clone this repository.
2. Set up the environment by configuring the necessary AWS services.
3. Update the database connection information in the "checkdb.php" and "form.php" files.
4. Deploy the application to an AWS EC2 instance.
5. Configure the domain name using AWS Route 53 and SSL/TLS certificate using AWS Certificate Manager.
6. Set up CloudFront for content delivery and configure CloudWatch for monitoring.

For detailed instructions, please refer to the documentation provided in the project.


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

