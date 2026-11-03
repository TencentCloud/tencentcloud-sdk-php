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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 单配额模型。
 *
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method integer getQuotaLimit() 获取<p>任务的配额数。</p><p>单位：张/秒。</p><ul><li>当 QuotaType 为 Image 时，单位为张；</li><li>当 QuotaType 为 Video 时，单位为秒；</li></ul>
 * @method void setQuotaLimit(integer $QuotaLimit) 设置<p>任务的配额数。</p><p>单位：张/秒。</p><ul><li>当 QuotaType 为 Image 时，单位为张；</li><li>当 QuotaType 为 Video 时，单位为秒；</li></ul>
 * @method string getModelVersion() 获取<p>模型版本。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本。</p>
 */
class AigcModelQuota extends AbstractModel
{
    /**
     * @var string <p>模型名称。</p>
     */
    public $ModelName;

    /**
     * @var integer <p>任务的配额数。</p><p>单位：张/秒。</p><ul><li>当 QuotaType 为 Image 时，单位为张；</li><li>当 QuotaType 为 Video 时，单位为秒；</li></ul>
     */
    public $QuotaLimit;

    /**
     * @var string <p>模型版本。</p>
     */
    public $ModelVersion;

    /**
     * @param string $ModelName <p>模型名称。</p>
     * @param integer $QuotaLimit <p>任务的配额数。</p><p>单位：张/秒。</p><ul><li>当 QuotaType 为 Image 时，单位为张；</li><li>当 QuotaType 为 Video 时，单位为秒；</li></ul>
     * @param string $ModelVersion <p>模型版本。</p>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }
    }
}
