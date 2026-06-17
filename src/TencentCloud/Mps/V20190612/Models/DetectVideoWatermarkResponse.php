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
 * DetectVideoWatermark返回参数结构体
 *
 * @method float getConfidence() 获取<p>是否存在水印的置信度</p><p>取值范围：[0, 100]</p>
 * @method void setConfidence(float $Confidence) 设置<p>是否存在水印的置信度</p><p>取值范围：[0, 100]</p>
 * @method boolean getHasWatermark() 获取<p>视频中是否存在水印</p>
 * @method void setHasWatermark(boolean $HasWatermark) 设置<p>视频中是否存在水印</p>
 * @method string getDescription() 获取<p>关于水印的一些描述性说明</p>
 * @method void setDescription(string $Description) 设置<p>关于水印的一些描述性说明</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DetectVideoWatermarkResponse extends AbstractModel
{
    /**
     * @var float <p>是否存在水印的置信度</p><p>取值范围：[0, 100]</p>
     */
    public $Confidence;

    /**
     * @var boolean <p>视频中是否存在水印</p>
     */
    public $HasWatermark;

    /**
     * @var string <p>关于水印的一些描述性说明</p>
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Confidence <p>是否存在水印的置信度</p><p>取值范围：[0, 100]</p>
     * @param boolean $HasWatermark <p>视频中是否存在水印</p>
     * @param string $Description <p>关于水印的一些描述性说明</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("HasWatermark",$param) and $param["HasWatermark"] !== null) {
            $this->HasWatermark = $param["HasWatermark"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
