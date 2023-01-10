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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVersionStatistics返回参数结构体
 *
 * @method integer getBasicVersionNum() 获取基础版数量
 * @method void setBasicVersionNum(integer $BasicVersionNum) 设置基础版数量
 * @method integer getProVersionNum() 获取专业版数量
 * @method void setProVersionNum(integer $ProVersionNum) 设置专业版数量
 * @method integer getUltimateVersionNum() 获取旗舰版数量
 * @method void setUltimateVersionNum(integer $UltimateVersionNum) 设置旗舰版数量
 * @method integer getGeneralVersionNum() 获取普惠版数量
 * @method void setGeneralVersionNum(integer $GeneralVersionNum) 设置普惠版数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVersionStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 基础版数量
     */
    public $BasicVersionNum;

    /**
     * @var integer 专业版数量
     */
    public $ProVersionNum;

    /**
     * @var integer 旗舰版数量
     */
    public $UltimateVersionNum;

    /**
     * @var integer 普惠版数量
     */
    public $GeneralVersionNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BasicVersionNum 基础版数量
     * @param integer $ProVersionNum 专业版数量
     * @param integer $UltimateVersionNum 旗舰版数量
     * @param integer $GeneralVersionNum 普惠版数量
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
        if (array_key_exists("BasicVersionNum",$param) and $param["BasicVersionNum"] !== null) {
            $this->BasicVersionNum = $param["BasicVersionNum"];
        }

        if (array_key_exists("ProVersionNum",$param) and $param["ProVersionNum"] !== null) {
            $this->ProVersionNum = $param["ProVersionNum"];
        }

        if (array_key_exists("UltimateVersionNum",$param) and $param["UltimateVersionNum"] !== null) {
            $this->UltimateVersionNum = $param["UltimateVersionNum"];
        }

        if (array_key_exists("GeneralVersionNum",$param) and $param["GeneralVersionNum"] !== null) {
            $this->GeneralVersionNum = $param["GeneralVersionNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
