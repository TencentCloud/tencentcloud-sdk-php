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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT集群用户信息
 *
 * @method string getName() 获取<p>封禁策略名</p>
 * @method void setName(string $Name) 设置<p>封禁策略名</p>
 * @method integer getType() 获取<p>封禁策略类型</p>
 * @method void setType(integer $Type) 设置<p>封禁策略类型</p>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getInclude() 获取<p>包含规则</p>
 * @method void setInclude(string $Include) 设置<p>包含规则</p>
 * @method array getExcludes() 获取<p>排除规则</p>
 * @method void setExcludes(array $Excludes) 设置<p>排除规则</p>
 * @method integer getExpireTime() 获取<p>过期时间，毫秒级时间戳 。</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间，毫秒级时间戳 。</p>
 * @method integer getUpdateTime() 获取<p>修改时间，毫秒级时间戳 。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>修改时间，毫秒级时间戳 。</p>
 * @method integer getCreateTime() 获取<p>创建时间，毫秒级时间戳 。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，毫秒级时间戳 。</p>
 */
class BlockRuleItem extends AbstractModel
{
    /**
     * @var string <p>封禁策略名</p>
     */
    public $Name;

    /**
     * @var integer <p>封禁策略类型</p>
     */
    public $Type;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>包含规则</p>
     */
    public $Include;

    /**
     * @var array <p>排除规则</p>
     */
    public $Excludes;

    /**
     * @var integer <p>过期时间，毫秒级时间戳 。</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>修改时间，毫秒级时间戳 。</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>创建时间，毫秒级时间戳 。</p>
     */
    public $CreateTime;

    /**
     * @param string $Name <p>封禁策略名</p>
     * @param integer $Type <p>封禁策略类型</p>
     * @param string $Remark <p>备注信息</p>
     * @param string $Include <p>包含规则</p>
     * @param array $Excludes <p>排除规则</p>
     * @param integer $ExpireTime <p>过期时间，毫秒级时间戳 。</p>
     * @param integer $UpdateTime <p>修改时间，毫秒级时间戳 。</p>
     * @param integer $CreateTime <p>创建时间，毫秒级时间戳 。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Include",$param) and $param["Include"] !== null) {
            $this->Include = $param["Include"];
        }

        if (array_key_exists("Excludes",$param) and $param["Excludes"] !== null) {
            $this->Excludes = $param["Excludes"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
