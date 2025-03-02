<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业扩展服务授权列表详情
 *
 * @method string getType() 获取扩展服务类型，和入参一致
 * @method void setType(string $Type) 设置扩展服务类型，和入参一致
 * @method string getName() 获取扩展服务名称
 * @method void setName(string $Name) 设置扩展服务名称
 * @method array getHasAuthUserList() 获取授权员工列表
 * @method void setHasAuthUserList(array $HasAuthUserList) 设置授权员工列表
 * @method array getHasAuthOrganizationList() 获取授权企业列表（企业自动签时，该字段有值）
 * @method void setHasAuthOrganizationList(array $HasAuthOrganizationList) 设置授权企业列表（企业自动签时，该字段有值）
 * @method integer getAuthUserTotal() 获取授权员工列表总数
 * @method void setAuthUserTotal(integer $AuthUserTotal) 设置授权员工列表总数
 * @method integer getAuthOrganizationTotal() 获取授权企业列表总数
 * @method void setAuthOrganizationTotal(integer $AuthOrganizationTotal) 设置授权企业列表总数
 */
class AuthInfoDetail extends AbstractModel
{
    /**
     * @var string 扩展服务类型，和入参一致
     */
    public $Type;

    /**
     * @var string 扩展服务名称
     */
    public $Name;

    /**
     * @var array 授权员工列表
     */
    public $HasAuthUserList;

    /**
     * @var array 授权企业列表（企业自动签时，该字段有值）
     */
    public $HasAuthOrganizationList;

    /**
     * @var integer 授权员工列表总数
     */
    public $AuthUserTotal;

    /**
     * @var integer 授权企业列表总数
     */
    public $AuthOrganizationTotal;

    /**
     * @param string $Type 扩展服务类型，和入参一致
     * @param string $Name 扩展服务名称
     * @param array $HasAuthUserList 授权员工列表
     * @param array $HasAuthOrganizationList 授权企业列表（企业自动签时，该字段有值）
     * @param integer $AuthUserTotal 授权员工列表总数
     * @param integer $AuthOrganizationTotal 授权企业列表总数
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("HasAuthUserList",$param) and $param["HasAuthUserList"] !== null) {
            $this->HasAuthUserList = [];
            foreach ($param["HasAuthUserList"] as $key => $value){
                $obj = new HasAuthUser();
                $obj->deserialize($value);
                array_push($this->HasAuthUserList, $obj);
            }
        }

        if (array_key_exists("HasAuthOrganizationList",$param) and $param["HasAuthOrganizationList"] !== null) {
            $this->HasAuthOrganizationList = [];
            foreach ($param["HasAuthOrganizationList"] as $key => $value){
                $obj = new HasAuthOrganization();
                $obj->deserialize($value);
                array_push($this->HasAuthOrganizationList, $obj);
            }
        }

        if (array_key_exists("AuthUserTotal",$param) and $param["AuthUserTotal"] !== null) {
            $this->AuthUserTotal = $param["AuthUserTotal"];
        }

        if (array_key_exists("AuthOrganizationTotal",$param) and $param["AuthOrganizationTotal"] !== null) {
            $this->AuthOrganizationTotal = $param["AuthOrganizationTotal"];
        }
    }
}
