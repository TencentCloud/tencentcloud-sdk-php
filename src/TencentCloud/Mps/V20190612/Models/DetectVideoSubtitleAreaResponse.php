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
 * DetectVideoSubtitleArea返回参数结构体
 *
 * @method integer getWidth() 获取<p>视频宽度</p><p>单位：px</p>
 * @method void setWidth(integer $Width) 设置<p>视频宽度</p><p>单位：px</p>
 * @method integer getHeight() 获取<p>视频高度</p><p>单位：px</p>
 * @method void setHeight(integer $Height) 设置<p>视频高度</p><p>单位：px</p>
 * @method array getResult() 获取<p>识别到的字幕框，识别不到结果为空</p>
 * @method void setResult(array $Result) 设置<p>识别到的字幕框，识别不到结果为空</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DetectVideoSubtitleAreaResponse extends AbstractModel
{
    /**
     * @var integer <p>视频宽度</p><p>单位：px</p>
     */
    public $Width;

    /**
     * @var integer <p>视频高度</p><p>单位：px</p>
     */
    public $Height;

    /**
     * @var array <p>识别到的字幕框，识别不到结果为空</p>
     */
    public $Result;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Width <p>视频宽度</p><p>单位：px</p>
     * @param integer $Height <p>视频高度</p><p>单位：px</p>
     * @param array $Result <p>识别到的字幕框，识别不到结果为空</p>
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new SubtitleArea();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
