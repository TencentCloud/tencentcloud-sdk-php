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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeHealthCodeOCR返回参数结构体
 *
 * @method string getName() 获取持码人姓名
 * @method void setName(string $Name) 设置持码人姓名
 * @method string getTime() 获取健康码更新时间，格式为：XXXX-XX-XX XX:XX:XX
 * @method void setTime(string $Time) 设置健康码更新时间，格式为：XXXX-XX-XX XX:XX:XX
 * @method string getColor() 获取健康码颜色：绿色、黄色、红色
 * @method void setColor(string $Color) 设置健康码颜色：绿色、黄色、红色
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeHealthCodeOCRResponse extends AbstractModel
{
    /**
     * @var string 持码人姓名
     */
    public $Name;

    /**
     * @var string 健康码更新时间，格式为：XXXX-XX-XX XX:XX:XX
     */
    public $Time;

    /**
     * @var string 健康码颜色：绿色、黄色、红色
     */
    public $Color;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 持码人姓名
     * @param string $Time 健康码更新时间，格式为：XXXX-XX-XX XX:XX:XX
     * @param string $Color 健康码颜色：绿色、黄色、红色
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
