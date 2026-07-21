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
 * 媒体处理 VOD输出对象信息。
 *
 * @method string getBucket() 获取<p>媒体处理生成的文件输出的目标 <em>Bucket ID</em></p>
 * @method void setBucket(string $Bucket) 设置<p>媒体处理生成的文件输出的目标 <em>Bucket ID</em></p>
 * @method string getRegion() 获取<p>媒体处理生成的文件输出的目标 Bucket 的园区</p>
 * @method void setRegion(string $Region) 设置<p>媒体处理生成的文件输出的目标 Bucket 的园区</p>
 * @method integer getSubAppId() 获取<p>点播应用Id</p>
 * @method void setSubAppId(integer $SubAppId) 设置<p>点播应用Id</p>
 * @method integer getVodBasic() 获取<p>任务输出是否使用VOD标准版。<br>注意：不填表示使用VOD专业版。</p><p>枚举值：</p><ul><li>0： 不使用VOD标准版</li><li>1： 使用VOD标准版</li></ul>
 * @method void setVodBasic(integer $VodBasic) 设置<p>任务输出是否使用VOD标准版。<br>注意：不填表示使用VOD专业版。</p><p>枚举值：</p><ul><li>0： 不使用VOD标准版</li><li>1： 使用VOD标准版</li></ul>
 */
class VODOutputStorage extends AbstractModel
{
    /**
     * @var string <p>媒体处理生成的文件输出的目标 <em>Bucket ID</em></p>
     */
    public $Bucket;

    /**
     * @var string <p>媒体处理生成的文件输出的目标 Bucket 的园区</p>
     */
    public $Region;

    /**
     * @var integer <p>点播应用Id</p>
     */
    public $SubAppId;

    /**
     * @var integer <p>任务输出是否使用VOD标准版。<br>注意：不填表示使用VOD专业版。</p><p>枚举值：</p><ul><li>0： 不使用VOD标准版</li><li>1： 使用VOD标准版</li></ul>
     */
    public $VodBasic;

    /**
     * @param string $Bucket <p>媒体处理生成的文件输出的目标 <em>Bucket ID</em></p>
     * @param string $Region <p>媒体处理生成的文件输出的目标 Bucket 的园区</p>
     * @param integer $SubAppId <p>点播应用Id</p>
     * @param integer $VodBasic <p>任务输出是否使用VOD标准版。<br>注意：不填表示使用VOD专业版。</p><p>枚举值：</p><ul><li>0： 不使用VOD标准版</li><li>1： 使用VOD标准版</li></ul>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("VodBasic",$param) and $param["VodBasic"] !== null) {
            $this->VodBasic = $param["VodBasic"];
        }
    }
}
