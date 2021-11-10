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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchProduction返回参数结构体
 *
 * @method integer getBatchCnt() 获取量产数量。
 * @method void setBatchCnt(integer $BatchCnt) 设置量产数量。
 * @method integer getBurnMethod() 获取烧录方式。
 * @method void setBurnMethod(integer $BurnMethod) 设置烧录方式。
 * @method integer getCreateTime() 获取创建时间。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间。
 * @method string getDownloadUrl() 获取下载URL。
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载URL。
 * @method integer getGenerationMethod() 获取生成方式。
 * @method void setGenerationMethod(integer $GenerationMethod) 设置生成方式。
 * @method string getUploadUrl() 获取上传URL。
 * @method void setUploadUrl(string $UploadUrl) 设置上传URL。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBatchProductionResponse extends AbstractModel
{
    /**
     * @var integer 量产数量。
     */
    public $BatchCnt;

    /**
     * @var integer 烧录方式。
     */
    public $BurnMethod;

    /**
     * @var integer 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 下载URL。
     */
    public $DownloadUrl;

    /**
     * @var integer 生成方式。
     */
    public $GenerationMethod;

    /**
     * @var string 上传URL。
     */
    public $UploadUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BatchCnt 量产数量。
     * @param integer $BurnMethod 烧录方式。
     * @param integer $CreateTime 创建时间。
     * @param string $DownloadUrl 下载URL。
     * @param integer $GenerationMethod 生成方式。
     * @param string $UploadUrl 上传URL。
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
        if (array_key_exists("BatchCnt",$param) and $param["BatchCnt"] !== null) {
            $this->BatchCnt = $param["BatchCnt"];
        }

        if (array_key_exists("BurnMethod",$param) and $param["BurnMethod"] !== null) {
            $this->BurnMethod = $param["BurnMethod"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("GenerationMethod",$param) and $param["GenerationMethod"] !== null) {
            $this->GenerationMethod = $param["GenerationMethod"];
        }

        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
