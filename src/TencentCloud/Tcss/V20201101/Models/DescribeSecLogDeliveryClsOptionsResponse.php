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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogDeliveryClsOptions返回参数结构体
 *
 * @method array getLogSetList() 获取cls可选日志集合列表(仅当入参ClsRegion不为空时返回)
 * @method void setLogSetList(array $LogSetList) 设置cls可选日志集合列表(仅当入参ClsRegion不为空时返回)
 * @method array getRegionList() 获取可选地域列表(仅当入参ClsRegion为空时返回)
 * @method void setRegionList(array $RegionList) 设置可选地域列表(仅当入参ClsRegion为空时返回)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecLogDeliveryClsOptionsResponse extends AbstractModel
{
    /**
     * @var array cls可选日志集合列表(仅当入参ClsRegion不为空时返回)
     */
    public $LogSetList;

    /**
     * @var array 可选地域列表(仅当入参ClsRegion为空时返回)
     */
    public $RegionList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LogSetList cls可选日志集合列表(仅当入参ClsRegion不为空时返回)
     * @param array $RegionList 可选地域列表(仅当入参ClsRegion为空时返回)
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
        if (array_key_exists("LogSetList",$param) and $param["LogSetList"] !== null) {
            $this->LogSetList = [];
            foreach ($param["LogSetList"] as $key => $value){
                $obj = new ClsLogsetInfo();
                $obj->deserialize($value);
                array_push($this->LogSetList, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
