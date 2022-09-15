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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDasbImageIds返回参数结构体
 *
 * @method string getBaseImageId() 获取基础镜像ID
 * @method void setBaseImageId(string $BaseImageId) 设置基础镜像ID
 * @method string getAiImageId() 获取AI镜像ID
 * @method void setAiImageId(string $AiImageId) 设置AI镜像ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDasbImageIdsResponse extends AbstractModel
{
    /**
     * @var string 基础镜像ID
     */
    public $BaseImageId;

    /**
     * @var string AI镜像ID
     */
    public $AiImageId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BaseImageId 基础镜像ID
     * @param string $AiImageId AI镜像ID
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
        if (array_key_exists("BaseImageId",$param) and $param["BaseImageId"] !== null) {
            $this->BaseImageId = $param["BaseImageId"];
        }

        if (array_key_exists("AiImageId",$param) and $param["AiImageId"] !== null) {
            $this->AiImageId = $param["AiImageId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
