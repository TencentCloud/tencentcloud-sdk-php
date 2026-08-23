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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器镜像木马白名单
 *
 * @method integer getRuleId() 获取<p>白名单id</p>
 * @method void setRuleId(integer $RuleId) 设置<p>白名单id</p>
 * @method string getOwnerAccountName() 获取<p>白名单所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>白名单所属账号名</p>
 * @method string getOwnerUin() 获取<p>白名单所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>白名单所属账号uin</p>
 * @method integer getOwnerAppId() 获取<p>白名单所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>白名单所属账号appid</p>
 * @method integer getScope() 获取<p>白名单范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
 * @method void setScope(integer $Scope) 设置<p>白名单范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
 * @method integer getImageIds() 获取<p>白名单生效镜像id</p>
 * @method void setImageIds(integer $ImageIds) 设置<p>白名单生效镜像id</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getStatus() 获取<p>白名单状态</p><p>枚举值：</p><ul><li>0： 失效</li><li>1： 有效</li></ul>
 * @method void setStatus(integer $Status) 设置<p>白名单状态</p><p>枚举值：</p><ul><li>0： 失效</li><li>1： 有效</li></ul>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getName() 获取<p>木马白名单名</p>
 * @method void setName(string $Name) 设置<p>木马白名单名</p>
 */
class ImageVirusWhitelist extends AbstractModel
{
    /**
     * @var integer <p>白名单id</p>
     */
    public $RuleId;

    /**
     * @var string <p>白名单所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>白名单所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>白名单所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>白名单范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
     */
    public $Scope;

    /**
     * @var integer <p>白名单生效镜像id</p>
     */
    public $ImageIds;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>白名单状态</p><p>枚举值：</p><ul><li>0： 失效</li><li>1： 有效</li></ul>
     */
    public $Status;

    /**
     * @var string <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>木马白名单名</p>
     */
    public $Name;

    /**
     * @param integer $RuleId <p>白名单id</p>
     * @param string $OwnerAccountName <p>白名单所属账号名</p>
     * @param string $OwnerUin <p>白名单所属账号uin</p>
     * @param integer $OwnerAppId <p>白名单所属账号appid</p>
     * @param integer $Scope <p>白名单范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
     * @param integer $ImageIds <p>白名单生效镜像id</p>
     * @param string $Remark <p>备注</p>
     * @param integer $Status <p>白名单状态</p><p>枚举值：</p><ul><li>0： 失效</li><li>1： 有效</li></ul>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $Name <p>木马白名单名</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
