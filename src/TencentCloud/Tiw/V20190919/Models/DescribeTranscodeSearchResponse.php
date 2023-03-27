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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTranscodeSearch返回参数结构体
 *
 * @method array getTranscodeTaskSet() 获取转码任务搜索结果集合
 * @method void setTranscodeTaskSet(array $TranscodeTaskSet) 设置转码任务搜索结果集合
 * @method integer getTotalCount() 获取转码总任务数
 * @method void setTotalCount(integer $TotalCount) 设置转码总任务数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTranscodeSearchResponse extends AbstractModel
{
    /**
     * @var array 转码任务搜索结果集合
     */
    public $TranscodeTaskSet;

    /**
     * @var integer 转码总任务数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TranscodeTaskSet 转码任务搜索结果集合
     * @param integer $TotalCount 转码总任务数
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
        if (array_key_exists("TranscodeTaskSet",$param) and $param["TranscodeTaskSet"] !== null) {
            $this->TranscodeTaskSet = [];
            foreach ($param["TranscodeTaskSet"] as $key => $value){
                $obj = new TranscodeTaskSearchResult();
                $obj->deserialize($value);
                array_push($this->TranscodeTaskSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
