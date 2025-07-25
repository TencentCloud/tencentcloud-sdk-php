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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecommendContent返回参数结构体
 *
 * @method string getRecTraceId() 获取推荐追踪id，用于行为上报。每次接口调用返回的traceId不同
 * @method void setRecTraceId(string $RecTraceId) 设置推荐追踪id，用于行为上报。每次接口调用返回的traceId不同
 * @method array getDataList() 获取标识具体的物料信息
 * @method void setDataList(array $DataList) 设置标识具体的物料信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecommendContentResponse extends AbstractModel
{
    /**
     * @var string 推荐追踪id，用于行为上报。每次接口调用返回的traceId不同
     */
    public $RecTraceId;

    /**
     * @var array 标识具体的物料信息
     */
    public $DataList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RecTraceId 推荐追踪id，用于行为上报。每次接口调用返回的traceId不同
     * @param array $DataList 标识具体的物料信息
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
        if (array_key_exists("RecTraceId",$param) and $param["RecTraceId"] !== null) {
            $this->RecTraceId = $param["RecTraceId"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new RecItemData();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
