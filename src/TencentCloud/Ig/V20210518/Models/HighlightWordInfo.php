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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高亮词信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getType() 获取类型 1:疾病，2:检验/检查，3:药品，4:科室，5:自定义配置
 * @method void setType(integer $Type) 设置类型 1:疾病，2:检验/检查，3:药品，4:科室，5:自定义配置
 * @method string getJumpType() 获取跳转类型 h5:h5类型，mini_wx:微信小程序
 * @method void setJumpType(string $JumpType) 设置跳转类型 h5:h5类型，mini_wx:微信小程序
 * @method string getJumpUrl() 获取跳转URL
 * @method void setJumpUrl(string $JumpUrl) 设置跳转URL
 * @method string getJumpAppid() 获取跳转小程序Appid
 * @method void setJumpAppid(string $JumpAppid) 设置跳转小程序Appid
 * @method string getJumpOriginId() 获取跳转小程序原始ID
 * @method void setJumpOriginId(string $JumpOriginId) 设置跳转小程序原始ID
 */
class HighlightWordInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 类型 1:疾病，2:检验/检查，3:药品，4:科室，5:自定义配置
     */
    public $Type;

    /**
     * @var string 跳转类型 h5:h5类型，mini_wx:微信小程序
     */
    public $JumpType;

    /**
     * @var string 跳转URL
     */
    public $JumpUrl;

    /**
     * @var string 跳转小程序Appid
     */
    public $JumpAppid;

    /**
     * @var string 跳转小程序原始ID
     */
    public $JumpOriginId;

    /**
     * @param string $Name 名称
     * @param integer $Type 类型 1:疾病，2:检验/检查，3:药品，4:科室，5:自定义配置
     * @param string $JumpType 跳转类型 h5:h5类型，mini_wx:微信小程序
     * @param string $JumpUrl 跳转URL
     * @param string $JumpAppid 跳转小程序Appid
     * @param string $JumpOriginId 跳转小程序原始ID
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

        if (array_key_exists("JumpType",$param) and $param["JumpType"] !== null) {
            $this->JumpType = $param["JumpType"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("JumpAppid",$param) and $param["JumpAppid"] !== null) {
            $this->JumpAppid = $param["JumpAppid"];
        }

        if (array_key_exists("JumpOriginId",$param) and $param["JumpOriginId"] !== null) {
            $this->JumpOriginId = $param["JumpOriginId"];
        }
    }
}
