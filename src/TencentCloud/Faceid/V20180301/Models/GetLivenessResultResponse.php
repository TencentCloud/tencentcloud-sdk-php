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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLivenessResult返回参数结构体
 *
 * @method string getResult() 获取流程的最终结果
 * @method void setResult(string $Result) 设置流程的最终结果
 * @method string getDescription() 获取流程的最终结果描述
 * @method void setDescription(string $Description) 设置流程的最终结果描述
 * @method FileInfo getBestFrame() 获取人像截图
 * @method void setBestFrame(FileInfo $BestFrame) 设置人像截图
 * @method FileInfo getVideo() 获取检测过程视频
 * @method void setVideo(FileInfo $Video) 设置检测过程视频
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetLivenessResultResponse extends AbstractModel
{
    /**
     * @var string 流程的最终结果
     */
    public $Result;

    /**
     * @var string 流程的最终结果描述
     */
    public $Description;

    /**
     * @var FileInfo 人像截图
     */
    public $BestFrame;

    /**
     * @var FileInfo 检测过程视频
     */
    public $Video;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result 流程的最终结果
     * @param string $Description 流程的最终结果描述
     * @param FileInfo $BestFrame 人像截图
     * @param FileInfo $Video 检测过程视频
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = new FileInfo();
            $this->BestFrame->deserialize($param["BestFrame"]);
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new FileInfo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
