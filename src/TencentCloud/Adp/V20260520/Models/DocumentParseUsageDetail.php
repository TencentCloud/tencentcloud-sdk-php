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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档解析单次调用明细
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method float getConsumptionPu() 获取<p>消耗资源数（PU）</p>
 * @method void setConsumptionPu(float $ConsumptionPu) 设置<p>消耗资源数（PU）</p>
 * @method string getDocId() 获取<p>文档 ID</p>
 * @method void setDocId(string $DocId) 设置<p>文档 ID</p>
 * @method string getDocUsageMethod() 获取<p>文档解析方式：离线文档解析、实时文档解析。上报值 OfflineUpload 对应离线文档解析；RealtimeUpload、RealTimeDocParse 对应实时文档解析</p>
 * @method void setDocUsageMethod(string $DocUsageMethod) 设置<p>文档解析方式：离线文档解析、实时文档解析。上报值 OfflineUpload 对应离线文档解析；RealtimeUpload、RealTimeDocParse 对应实时文档解析</p>
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 * @method string getParsedPageCount() 获取<p>解析页数</p>
 * @method void setParsedPageCount(string $ParsedPageCount) 设置<p>解析页数</p>
 */
class DocumentParseUsageDetail extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var float <p>消耗资源数（PU）</p>
     */
    public $ConsumptionPu;

    /**
     * @var string <p>文档 ID</p>
     */
    public $DocId;

    /**
     * @var string <p>文档解析方式：离线文档解析、实时文档解析。上报值 OfflineUpload 对应离线文档解析；RealtimeUpload、RealTimeDocParse 对应实时文档解析</p>
     */
    public $DocUsageMethod;

    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @var string <p>解析页数</p>
     */
    public $ParsedPageCount;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param float $ConsumptionPu <p>消耗资源数（PU）</p>
     * @param string $DocId <p>文档 ID</p>
     * @param string $DocUsageMethod <p>文档解析方式：离线文档解析、实时文档解析。上报值 OfflineUpload 对应离线文档解析；RealtimeUpload、RealTimeDocParse 对应实时文档解析</p>
     * @param string $KbId <p>知识库 ID</p>
     * @param string $ParsedPageCount <p>解析页数</p>
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

        if (array_key_exists("ConsumptionPu",$param) and $param["ConsumptionPu"] !== null) {
            $this->ConsumptionPu = $param["ConsumptionPu"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("DocUsageMethod",$param) and $param["DocUsageMethod"] !== null) {
            $this->DocUsageMethod = $param["DocUsageMethod"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("ParsedPageCount",$param) and $param["ParsedPageCount"] !== null) {
            $this->ParsedPageCount = $param["ParsedPageCount"];
        }
    }
}
