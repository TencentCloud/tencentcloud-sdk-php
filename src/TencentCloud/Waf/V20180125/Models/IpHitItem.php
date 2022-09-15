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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip封堵状态数据
 *
 * @method integer getAction() 获取动作
 * @method void setAction(integer $Action) 设置动作
 * @method string getCategory() 获取类别
 * @method void setCategory(string $Category) 设置类别
 * @method string getIp() 获取ip
 * @method void setIp(string $Ip) 设置ip
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getTsVersion() 获取时间戳
 * @method void setTsVersion(integer $TsVersion) 设置时间戳
 * @method integer getValidTs() 获取有效截止时间戳
 * @method void setValidTs(integer $ValidTs) 设置有效截止时间戳
 */
class IpHitItem extends AbstractModel
{
    /**
     * @var integer 动作
     */
    public $Action;

    /**
     * @var string 类别
     */
    public $Category;

    /**
     * @var string ip
     */
    public $Ip;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 时间戳
     */
    public $TsVersion;

    /**
     * @var integer 有效截止时间戳
     */
    public $ValidTs;

    /**
     * @param integer $Action 动作
     * @param string $Category 类别
     * @param string $Ip ip
     * @param string $Name 规则名称
     * @param integer $TsVersion 时间戳
     * @param integer $ValidTs 有效截止时间戳
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("ValidTs",$param) and $param["ValidTs"] !== null) {
            $this->ValidTs = $param["ValidTs"];
        }
    }
}
