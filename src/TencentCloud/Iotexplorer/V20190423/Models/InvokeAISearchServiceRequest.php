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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeAISearchService请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getQuery() 获取自然语言查询
 * @method void setQuery(string $Query) 设置自然语言查询
 * @method string getSummaryLang() 获取搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
 * @method void setSummaryLang(string $SummaryLang) 设置搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
 * @method integer getChannelId() 获取通道ID
 * @method void setChannelId(integer $ChannelId) 设置通道ID
 */
class InvokeAISearchServiceRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 自然语言查询
     */
    public $Query;

    /**
     * @var string 搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
     */
    public $SummaryLang;

    /**
     * @var integer 通道ID
     */
    public $ChannelId;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $Query 自然语言查询
     * @param string $SummaryLang 搜索结果总结的语言类型，支持的类型有：en-US、zh-CN、id-ID、th-TH
     * @param integer $ChannelId 通道ID
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SummaryLang",$param) and $param["SummaryLang"] !== null) {
            $this->SummaryLang = $param["SummaryLang"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
