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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadLog请求参数结构体
 *
 * @method string getTopicId() 获取主题id
 * @method void setTopicId(string $TopicId) 设置主题id
 * @method string getHashKey() 获取根据 hashkey 写入相应范围的主题分区
 * @method void setHashKey(string $HashKey) 设置根据 hashkey 写入相应范围的主题分区
 * @method string getCompressType() 获取压缩方法
 * @method void setCompressType(string $CompressType) 设置压缩方法
 */
class UploadLogRequest extends AbstractModel
{
    /**
     * @var string 主题id
     */
    public $TopicId;

    /**
     * @var string 根据 hashkey 写入相应范围的主题分区
     */
    public $HashKey;

    /**
     * @var string 压缩方法
     */
    public $CompressType;

    /**
     * @param string $TopicId 主题id
     * @param string $HashKey 根据 hashkey 写入相应范围的主题分区
     * @param string $CompressType 压缩方法
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("HashKey",$param) and $param["HashKey"] !== null) {
            $this->HashKey = $param["HashKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
