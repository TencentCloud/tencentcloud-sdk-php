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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则组详情数据
 *
 * @method string getAppId() 获取租户Id
 * @method void setAppId(string $AppId) 设置租户Id
 * @method string getGroupId() 获取规则组Id
 * @method void setGroupId(string $GroupId) 设置规则组Id
 * @method string getGroupName() 获取规则组名称
 * @method void setGroupName(string $GroupName) 设置规则组名称
 * @method integer getRuleCount() 获取规则数量
 * @method void setRuleCount(integer $RuleCount) 设置规则数量
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateBy() 获取创建人SubUin
 * @method void setCreateBy(string $CreateBy) 设置创建人SubUin
 * @method string getCreateName() 获取创建人名称
 * @method void setCreateName(string $CreateName) 设置创建人名称
 * @method string getUpdateBy() 获取更新人SubUin
 * @method void setUpdateBy(string $UpdateBy) 设置更新人SubUin
 * @method string getUpdateName() 获取更新人名称
 * @method void setUpdateName(string $UpdateName) 设置更新人名称
 * @method array getReceiveAccount() 获取下发关联账号
 * @method void setReceiveAccount(array $ReceiveAccount) 设置下发关联账号
 * @method array getExecAreas() 获取 所属阶段
 * @method void setExecAreas(array $ExecAreas) 设置 所属阶段
 * @method integer getDirection() 获取规则方向：1-入站规则，0-出站规则，-1 表示无方向
 * @method void setDirection(integer $Direction) 设置规则方向：1-入站规则，0-出站规则，-1 表示无方向
 */
class RuleGroupResp extends AbstractModel
{
    /**
     * @var string 租户Id
     */
    public $AppId;

    /**
     * @var string 规则组Id
     */
    public $GroupId;

    /**
     * @var string 规则组名称
     */
    public $GroupName;

    /**
     * @var integer 规则数量
     */
    public $RuleCount;

    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建人SubUin
     */
    public $CreateBy;

    /**
     * @var string 创建人名称
     */
    public $CreateName;

    /**
     * @var string 更新人SubUin
     */
    public $UpdateBy;

    /**
     * @var string 更新人名称
     */
    public $UpdateName;

    /**
     * @var array 下发关联账号
     */
    public $ReceiveAccount;

    /**
     * @var array  所属阶段
     */
    public $ExecAreas;

    /**
     * @var integer 规则方向：1-入站规则，0-出站规则，-1 表示无方向
     */
    public $Direction;

    /**
     * @param string $AppId 租户Id
     * @param string $GroupId 规则组Id
     * @param string $GroupName 规则组名称
     * @param integer $RuleCount 规则数量
     * @param string $Product 产品类型
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $CreateBy 创建人SubUin
     * @param string $CreateName 创建人名称
     * @param string $UpdateBy 更新人SubUin
     * @param string $UpdateName 更新人名称
     * @param array $ReceiveAccount 下发关联账号
     * @param array $ExecAreas  所属阶段
     * @param integer $Direction 规则方向：1-入站规则，0-出站规则，-1 表示无方向
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("CreateName",$param) and $param["CreateName"] !== null) {
            $this->CreateName = $param["CreateName"];
        }

        if (array_key_exists("UpdateBy",$param) and $param["UpdateBy"] !== null) {
            $this->UpdateBy = $param["UpdateBy"];
        }

        if (array_key_exists("UpdateName",$param) and $param["UpdateName"] !== null) {
            $this->UpdateName = $param["UpdateName"];
        }

        if (array_key_exists("ReceiveAccount",$param) and $param["ReceiveAccount"] !== null) {
            $this->ReceiveAccount = [];
            foreach ($param["ReceiveAccount"] as $key => $value){
                $obj = new ReceiveAccount();
                $obj->deserialize($value);
                array_push($this->ReceiveAccount, $obj);
            }
        }

        if (array_key_exists("ExecAreas",$param) and $param["ExecAreas"] !== null) {
            $this->ExecAreas = $param["ExecAreas"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
