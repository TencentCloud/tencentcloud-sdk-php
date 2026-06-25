<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步过来的ioa用户分组信息
 *
 * @method integer getOrgId() 获取<p>ioa用户组织id</p>
 * @method void setOrgId(integer $OrgId) 设置<p>ioa用户组织id</p>
 * @method string getOrgName() 获取<p>ioa用户组织名称</p>
 * @method void setOrgName(string $OrgName) 设置<p>ioa用户组织名称</p>
 * @method string getOrgIdPath() 获取<p>ioa用户组织id路径</p>
 * @method void setOrgIdPath(string $OrgIdPath) 设置<p>ioa用户组织id路径</p>
 * @method string getOrgNamePath() 获取<p>ioa用户组织名称路径</p>
 * @method void setOrgNamePath(string $OrgNamePath) 设置<p>ioa用户组织名称路径</p>
 * @method integer getSource() 获取<p>ioa关联用户源类型</p>
 * @method void setSource(integer $Source) 设置<p>ioa关联用户源类型</p>
 * @method string getUserDirName() 获取<p>用户所属目录</p>
 * @method void setUserDirName(string $UserDirName) 设置<p>用户所属目录</p>
 */
class IOAUserGroup extends AbstractModel
{
    /**
     * @var integer <p>ioa用户组织id</p>
     */
    public $OrgId;

    /**
     * @var string <p>ioa用户组织名称</p>
     */
    public $OrgName;

    /**
     * @var string <p>ioa用户组织id路径</p>
     */
    public $OrgIdPath;

    /**
     * @var string <p>ioa用户组织名称路径</p>
     */
    public $OrgNamePath;

    /**
     * @var integer <p>ioa关联用户源类型</p>
     */
    public $Source;

    /**
     * @var string <p>用户所属目录</p>
     */
    public $UserDirName;

    /**
     * @param integer $OrgId <p>ioa用户组织id</p>
     * @param string $OrgName <p>ioa用户组织名称</p>
     * @param string $OrgIdPath <p>ioa用户组织id路径</p>
     * @param string $OrgNamePath <p>ioa用户组织名称路径</p>
     * @param integer $Source <p>ioa关联用户源类型</p>
     * @param string $UserDirName <p>用户所属目录</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("OrgName",$param) and $param["OrgName"] !== null) {
            $this->OrgName = $param["OrgName"];
        }

        if (array_key_exists("OrgIdPath",$param) and $param["OrgIdPath"] !== null) {
            $this->OrgIdPath = $param["OrgIdPath"];
        }

        if (array_key_exists("OrgNamePath",$param) and $param["OrgNamePath"] !== null) {
            $this->OrgNamePath = $param["OrgNamePath"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UserDirName",$param) and $param["UserDirName"] !== null) {
            $this->UserDirName = $param["UserDirName"];
        }
    }
}
