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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公司资质审核状态信息
 *
 * @method integer getId() 获取申请单ID
 * @method void setId(integer $Id) 设置申请单ID
 * @method string getCompanyName() 获取公司名称
 * @method void setCompanyName(string $CompanyName) 设置公司名称
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getCheckTime() 获取审核时间
 * @method void setCheckTime(integer $CheckTime) 设置审核时间
 * @method string getCheckMsg() 获取审核备注
 * @method void setCheckMsg(string $CheckMsg) 设置审核备注
 * @method integer getState() 获取审核状态，1-待审核，2-审核通过，3-驳回
 * @method void setState(integer $State) 设置审核状态，1-待审核，2-审核通过，3-驳回
 * @method string getBusinessId() 获取公司统一社会信用代码
 * @method void setBusinessId(string $BusinessId) 设置公司统一社会信用代码
 * @method integer getModifyTime() 获取修改时间
 * @method void setModifyTime(integer $ModifyTime) 设置修改时间
 * @method string getContractNo() 获取合同编号
 * @method void setContractNo(string $ContractNo) 设置合同编号
 */
class CompanyStateInfo extends AbstractModel
{
    /**
     * @var integer 申请单ID
     */
    public $Id;

    /**
     * @var string 公司名称
     */
    public $CompanyName;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 审核时间
     */
    public $CheckTime;

    /**
     * @var string 审核备注
     */
    public $CheckMsg;

    /**
     * @var integer 审核状态，1-待审核，2-审核通过，3-驳回
     */
    public $State;

    /**
     * @var string 公司统一社会信用代码
     */
    public $BusinessId;

    /**
     * @var integer 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 合同编号
     */
    public $ContractNo;

    /**
     * @param integer $Id 申请单ID
     * @param string $CompanyName 公司名称
     * @param integer $CreateTime 创建时间
     * @param integer $CheckTime 审核时间
     * @param string $CheckMsg 审核备注
     * @param integer $State 审核状态，1-待审核，2-审核通过，3-驳回
     * @param string $BusinessId 公司统一社会信用代码
     * @param integer $ModifyTime 修改时间
     * @param string $ContractNo 合同编号
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }

        if (array_key_exists("CheckMsg",$param) and $param["CheckMsg"] !== null) {
            $this->CheckMsg = $param["CheckMsg"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ContractNo",$param) and $param["ContractNo"] !== null) {
            $this->ContractNo = $param["ContractNo"];
        }
    }
}
