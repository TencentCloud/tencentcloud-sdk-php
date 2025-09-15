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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体处理 VOD （点播专业版）对象信息。
 *
 * @method string getBucket() 获取媒体处理对象文件所在的 *Bucket ID*
 * @method void setBucket(string $Bucket) 设置媒体处理对象文件所在的 *Bucket ID*
 * @method string getRegion() 获取媒体处理对象文件所在的 Bucket 所属园区
 * @method void setRegion(string $Region) 设置媒体处理对象文件所在的 Bucket 所属园区
 * @method string getObject() 获取媒体处理对象文件的输入路径
 * @method void setObject(string $Object) 设置媒体处理对象文件的输入路径
 * @method integer getSubAppId() 获取点播专业版应用Id
 * @method void setSubAppId(integer $SubAppId) 设置点播专业版应用Id
 */
class VODInputInfo extends AbstractModel
{
    /**
     * @var string 媒体处理对象文件所在的 *Bucket ID*
     */
    public $Bucket;

    /**
     * @var string 媒体处理对象文件所在的 Bucket 所属园区
     */
    public $Region;

    /**
     * @var string 媒体处理对象文件的输入路径
     */
    public $Object;

    /**
     * @var integer 点播专业版应用Id
     */
    public $SubAppId;

    /**
     * @param string $Bucket 媒体处理对象文件所在的 *Bucket ID*
     * @param string $Region 媒体处理对象文件所在的 Bucket 所属园区
     * @param string $Object 媒体处理对象文件的输入路径
     * @param integer $SubAppId 点播专业版应用Id
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
