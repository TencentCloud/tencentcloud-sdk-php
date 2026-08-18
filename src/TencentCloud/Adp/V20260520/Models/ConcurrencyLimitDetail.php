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
 * 并发超限明细
 *
 * @method CallSource getCallSource() 获取<p>调用来源（subject_type 决定 subject_id/subject_name 的含义，如 APP 时 subject_id=app_id、subject_name=app_name）</p>
 * @method void setCallSource(CallSource $CallSource) 设置<p>调用来源（subject_type 决定 subject_id/subject_name 的含义，如 APP 时 subject_id=app_id、subject_name=app_name）</p>
 * @method string getEventTime() 获取<p>超限发生时间（Unix秒）</p>
 * @method void setEventTime(string $EventTime) 设置<p>超限发生时间（Unix秒）</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getRequestQuery() 获取<p>请求内容（用户请求的原始查询文本）</p>
 * @method void setRequestQuery(string $RequestQuery) 设置<p>请求内容（用户请求的原始查询文本）</p>
 * @method string getSpaceId() 获取<p>空间 ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间 ID</p>
 */
class ConcurrencyLimitDetail extends AbstractModel
{
    /**
     * @var CallSource <p>调用来源（subject_type 决定 subject_id/subject_name 的含义，如 APP 时 subject_id=app_id、subject_name=app_name）</p>
     */
    public $CallSource;

    /**
     * @var string <p>超限发生时间（Unix秒）</p>
     */
    public $EventTime;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>请求内容（用户请求的原始查询文本）</p>
     */
    public $RequestQuery;

    /**
     * @var string <p>空间 ID</p>
     */
    public $SpaceId;

    /**
     * @param CallSource $CallSource <p>调用来源（subject_type 决定 subject_id/subject_name 的含义，如 APP 时 subject_id=app_id、subject_name=app_name）</p>
     * @param string $EventTime <p>超限发生时间（Unix秒）</p>
     * @param string $ModelName <p>模型名称</p>
     * @param string $RequestQuery <p>请求内容（用户请求的原始查询文本）</p>
     * @param string $SpaceId <p>空间 ID</p>
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
        if (array_key_exists("CallSource",$param) and $param["CallSource"] !== null) {
            $this->CallSource = new CallSource();
            $this->CallSource->deserialize($param["CallSource"]);
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("RequestQuery",$param) and $param["RequestQuery"] !== null) {
            $this->RequestQuery = $param["RequestQuery"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
