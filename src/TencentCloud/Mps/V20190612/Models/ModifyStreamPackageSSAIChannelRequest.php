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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamPackageSSAIChannel请求参数结构体
 *
 * @method string getName() 获取广告插入配置名称，全局唯一，不能与其他频道重复。
 * @method void setName(string $Name) 设置广告插入配置名称，全局唯一，不能与其他频道重复。
 * @method string getContentSource() 获取通配广告源地址。
 * @method void setContentSource(string $ContentSource) 设置通配广告源地址。
 * @method SSAIConf getSSAIInfo() 获取广告插入配置信息。
 * @method void setSSAIInfo(SSAIConf $SSAIInfo) 设置广告插入配置信息。
 * @method string getID() 获取广告插入配置ID。
 * @method void setID(string $ID) 设置广告插入配置ID。
 */
class ModifyStreamPackageSSAIChannelRequest extends AbstractModel
{
    /**
     * @var string 广告插入配置名称，全局唯一，不能与其他频道重复。
     */
    public $Name;

    /**
     * @var string 通配广告源地址。
     */
    public $ContentSource;

    /**
     * @var SSAIConf 广告插入配置信息。
     */
    public $SSAIInfo;

    /**
     * @var string 广告插入配置ID。
     */
    public $ID;

    /**
     * @param string $Name 广告插入配置名称，全局唯一，不能与其他频道重复。
     * @param string $ContentSource 通配广告源地址。
     * @param SSAIConf $SSAIInfo 广告插入配置信息。
     * @param string $ID 广告插入配置ID。
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

        if (array_key_exists("ContentSource",$param) and $param["ContentSource"] !== null) {
            $this->ContentSource = $param["ContentSource"];
        }

        if (array_key_exists("SSAIInfo",$param) and $param["SSAIInfo"] !== null) {
            $this->SSAIInfo = new SSAIConf();
            $this->SSAIInfo->deserialize($param["SSAIInfo"]);
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
