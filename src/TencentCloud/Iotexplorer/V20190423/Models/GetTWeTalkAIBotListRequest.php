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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTWeTalkAIBotList请求参数结构体
 *
 * @method string getBotId() 获取智能体ID
 * @method void setBotId(string $BotId) 设置智能体ID
 * @method string getName() 获取智能体名称
 * @method void setName(string $Name) 设置智能体名称
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method boolean getIncludeCredentials() 获取是否脱敏
 * @method void setIncludeCredentials(boolean $IncludeCredentials) 设置是否脱敏
 * @method integer getOffset() 获取1
 * @method void setOffset(integer $Offset) 设置1
 * @method integer getLimit() 获取10
 * @method void setLimit(integer $Limit) 设置10
 */
class GetTWeTalkAIBotListRequest extends AbstractModel
{
    /**
     * @var string 智能体ID
     */
    public $BotId;

    /**
     * @var string 智能体名称
     */
    public $Name;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var boolean 是否脱敏
     */
    public $IncludeCredentials;

    /**
     * @var integer 1
     */
    public $Offset;

    /**
     * @var integer 10
     */
    public $Limit;

    /**
     * @param string $BotId 智能体ID
     * @param string $Name 智能体名称
     * @param string $ProductId 产品ID
     * @param string $InstanceId 实例ID
     * @param boolean $IncludeCredentials 是否脱敏
     * @param integer $Offset 1
     * @param integer $Limit 10
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
        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IncludeCredentials",$param) and $param["IncludeCredentials"] !== null) {
            $this->IncludeCredentials = $param["IncludeCredentials"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
