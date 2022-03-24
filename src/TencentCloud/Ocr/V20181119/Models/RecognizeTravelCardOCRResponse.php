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
 * RecognizeTravelCardOCR返回参数结构体
 *
 * @method string getTime() 获取行程卡更新时间，格式为：XXXX.XX.XX XX:XX:XX
 * @method void setTime(string $Time) 设置行程卡更新时间，格式为：XXXX.XX.XX XX:XX:XX
 * @method string getColor() 获取行程卡颜色：绿色、黄色、红色
 * @method void setColor(string $Color) 设置行程卡颜色：绿色、黄色、红色
 * @method array getReachedCity() 获取14天内到达或途经的城市
 * @method void setReachedCity(array $ReachedCity) 设置14天内到达或途经的城市
 * @method array getRiskArea() 获取14天内到达或途径存在中高风险地区的城市
 * @method void setRiskArea(array $RiskArea) 设置14天内到达或途径存在中高风险地区的城市
 * @method string getTelephone() 获取电话号码
 * @method void setTelephone(string $Telephone) 设置电话号码
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeTravelCardOCRResponse extends AbstractModel
{
    /**
     * @var string 行程卡更新时间，格式为：XXXX.XX.XX XX:XX:XX
     */
    public $Time;

    /**
     * @var string 行程卡颜色：绿色、黄色、红色
     */
    public $Color;

    /**
     * @var array 14天内到达或途经的城市
     */
    public $ReachedCity;

    /**
     * @var array 14天内到达或途径存在中高风险地区的城市
     */
    public $RiskArea;

    /**
     * @var string 电话号码
     */
    public $Telephone;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Time 行程卡更新时间，格式为：XXXX.XX.XX XX:XX:XX
     * @param string $Color 行程卡颜色：绿色、黄色、红色
     * @param array $ReachedCity 14天内到达或途经的城市
     * @param array $RiskArea 14天内到达或途径存在中高风险地区的城市
     * @param string $Telephone 电话号码
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("ReachedCity",$param) and $param["ReachedCity"] !== null) {
            $this->ReachedCity = $param["ReachedCity"];
        }

        if (array_key_exists("RiskArea",$param) and $param["RiskArea"] !== null) {
            $this->RiskArea = $param["RiskArea"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
