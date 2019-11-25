using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Toko_online
{
    #region Tb_user
    public class Tb_user
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _email;
        protected string _image;
        protected string _password;
        protected string _alamat;
        protected int _role_id;
        protected int _is_active;
        protected int _data_created;
        #endregion
        #region Constructors
        public Tb_user() { }
        public Tb_user(string name, string email, string image, string password, string alamat, int role_id, int is_active, int data_created)
        {
            this._name=name;
            this._email=email;
            this._image=image;
            this._password=password;
            this._alamat=alamat;
            this._role_id=role_id;
            this._is_active=is_active;
            this._data_created=data_created;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Alamat
        {
            get {return _alamat;}
            set {_alamat=value;}
        }
        public virtual int Role_id
        {
            get {return _role_id;}
            set {_role_id=value;}
        }
        public virtual int Is_active
        {
            get {return _is_active;}
            set {_is_active=value;}
        }
        public virtual int Data_created
        {
            get {return _data_created;}
            set {_data_created=value;}
        }
        #endregion
    }
    #endregion
}