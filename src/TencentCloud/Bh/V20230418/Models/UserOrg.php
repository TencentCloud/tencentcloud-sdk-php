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
 * 同步的ioa用户组织信息
 *
 * @method integer getOrgId() 获取ioa用户组织id
 * @method void setOrgId(integer $OrgId) 设置ioa用户组织id
 * @method string getOrgName() 获取ioa用户组织名称
 * @method void setOrgName(string $OrgName) 设置ioa用户组织名称
 * @method string getOrgIdPath() 获取ioa用户组织id路径
 * @method void setOrgIdPath(string $OrgIdPath) 设置ioa用户组织id路径
 * @method string getOrgNamePath() 获取ioa用户组织名称路径
 * @method void setOrgNamePath(string $OrgNamePath) 设置ioa用户组织名称路径
 * @method integer getUserTotal() 获取ioa用户组织id下的用户数
 * @method void setUserTotal(integer $UserTotal) 设置ioa用户组织id下的用户数
 */
class UserOrg extends AbstractModel
{
    /**
     * @var integer ioa用户组织id
     */
    public $OrgId;

    /**
     * @var string ioa用户组织名称
     */
    public $OrgName;

    /**
     * @var string ioa用户组织id路径
     */
    public $OrgIdPath;

    /**
     * @var string ioa用户组织名称路径
     */
    public $OrgNamePath;

    /**
     * @var integer ioa用户组织id下的用户数
     */
    public $UserTotal;

    /**
     * @param integer $OrgId ioa用户组织id
     * @param string $OrgName ioa用户组织名称
     * @param string $OrgIdPath ioa用户组织id路径
     * @param string $OrgNamePath ioa用户组织名称路径
     * @param integer $UserTotal ioa用户组织id下的用户数
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

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }
    }
}
