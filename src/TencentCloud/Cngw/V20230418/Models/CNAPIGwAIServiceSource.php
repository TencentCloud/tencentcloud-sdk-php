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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI服务来源
 *
 * @method string getSourceName() 获取<p>服务来源</p>
 * @method void setSourceName(string $SourceName) 设置<p>服务来源</p>
 * @method string getSourceId() 获取<p>服务ID</p>
 * @method void setSourceId(string $SourceId) 设置<p>服务ID</p>
 * @method string getSourceType() 获取<p>来源类型</p>
 * @method void setSourceType(string $SourceType) 设置<p>来源类型</p>
 * @method string getSourceProduct() 获取<p>来源产品</p>
 * @method void setSourceProduct(string $SourceProduct) 设置<p>来源产品</p>
 * @method CNAPIGwAIServiceSourceInfo getSourceInfo() 获取<p>来源配置信息</p>
 * @method void setSourceInfo(CNAPIGwAIServiceSourceInfo $SourceInfo) 设置<p>来源配置信息</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class CNAPIGwAIServiceSource extends AbstractModel
{
    /**
     * @var string <p>服务来源</p>
     */
    public $SourceName;

    /**
     * @var string <p>服务ID</p>
     */
    public $SourceId;

    /**
     * @var string <p>来源类型</p>
     */
    public $SourceType;

    /**
     * @var string <p>来源产品</p>
     */
    public $SourceProduct;

    /**
     * @var CNAPIGwAIServiceSourceInfo <p>来源配置信息</p>
     */
    public $SourceInfo;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $SourceName <p>服务来源</p>
     * @param string $SourceId <p>服务ID</p>
     * @param string $SourceType <p>来源类型</p>
     * @param string $SourceProduct <p>来源产品</p>
     * @param CNAPIGwAIServiceSourceInfo $SourceInfo <p>来源配置信息</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceProduct",$param) and $param["SourceProduct"] !== null) {
            $this->SourceProduct = $param["SourceProduct"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new CNAPIGwAIServiceSourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
