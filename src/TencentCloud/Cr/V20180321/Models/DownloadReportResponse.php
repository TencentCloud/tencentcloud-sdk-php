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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDailyReportUrl() 获取催收日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDailyReportUrl(string $DailyReportUrl) 设置催收日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultReportUrl() 获取催收结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultReportUrl(string $ResultReportUrl) 设置催收结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetailReportUrl() 获取催收明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailReportUrl(string $DetailReportUrl) 设置催收明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackDailyReportUrl() 获取回访日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackDailyReportUrl(string $CallbackDailyReportUrl) 设置回访日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackResultReportUrl() 获取回访结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackResultReportUrl(string $CallbackResultReportUrl) 设置回访结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackDetailReportUrl() 获取回访明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackDetailReportUrl(string $CallbackDetailReportUrl) 设置回访明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DownloadReport返回参数结构体
 */
class DownloadReportResponse extends AbstractModel
{
    /**
     * @var string 催收日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DailyReportUrl;

    /**
     * @var string 催收结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultReportUrl;

    /**
     * @var string 催收明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailReportUrl;

    /**
     * @var string 回访日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackDailyReportUrl;

    /**
     * @var string 回访结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackResultReportUrl;

    /**
     * @var string 回访明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackDetailReportUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $DailyReportUrl 催收日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultReportUrl 催收结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetailReportUrl 催收明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackDailyReportUrl 回访日报下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackResultReportUrl 回访结果下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackDetailReportUrl 回访明细下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DailyReportUrl",$param) and $param["DailyReportUrl"] !== null) {
            $this->DailyReportUrl = $param["DailyReportUrl"];
        }

        if (array_key_exists("ResultReportUrl",$param) and $param["ResultReportUrl"] !== null) {
            $this->ResultReportUrl = $param["ResultReportUrl"];
        }

        if (array_key_exists("DetailReportUrl",$param) and $param["DetailReportUrl"] !== null) {
            $this->DetailReportUrl = $param["DetailReportUrl"];
        }

        if (array_key_exists("CallbackDailyReportUrl",$param) and $param["CallbackDailyReportUrl"] !== null) {
            $this->CallbackDailyReportUrl = $param["CallbackDailyReportUrl"];
        }

        if (array_key_exists("CallbackResultReportUrl",$param) and $param["CallbackResultReportUrl"] !== null) {
            $this->CallbackResultReportUrl = $param["CallbackResultReportUrl"];
        }

        if (array_key_exists("CallbackDetailReportUrl",$param) and $param["CallbackDetailReportUrl"] !== null) {
            $this->CallbackDetailReportUrl = $param["CallbackDetailReportUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
