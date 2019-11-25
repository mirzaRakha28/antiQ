using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Toko_online
{
    #region Tb_user_role
    public class Tb_user_role
    {
        #region Member Variables
        protected int _id;
        protected string _role;
        #endregion
        #region Constructors
        public Tb_user_role() { }
        public Tb_user_role(string role)
        {
            this._role=role;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Role
        {
            get {return _role;}
            set {_role=value;}
        }
        #endregion
    }
    #endregion
}