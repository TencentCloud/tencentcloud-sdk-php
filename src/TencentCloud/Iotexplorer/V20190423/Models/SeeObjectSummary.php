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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 直传对象概要信息
 *
 * @method string getKey() 获取<p>对象 Key</p>
 * @method void setKey(string $Key) 设置<p>对象 Key</p>
 * @method string getCOSURI() 获取<p>TWeSee 直传对象或目录的 COS URI</p>
 * @method void setCOSURI(string $COSURI) 设置<p>TWeSee 直传对象或目录的 COS URI</p>
 * @method integer getSize() 获取<p>对象大小，单位：字节</p>
 * @method void setSize(integer $Size) 设置<p>对象大小，单位：字节</p>
 * @method string getETag() 获取<p>对象的 ETag</p>
 * @method void setETag(string $ETag) 设置<p>对象的 ETag</p>
 * @method integer getLastModified() 获取<p>对象最后修改时间，秒级 UNIX 时间戳</p>
 * @method void setLastModified(integer $LastModified) 设置<p>对象最后修改时间，秒级 UNIX 时间戳</p>
 */
class SeeObjectSummary extends AbstractModel
{
    /**
     * @var string <p>对象 Key</p>
     */
    public $Key;

    /**
     * @var string <p>TWeSee 直传对象或目录的 COS URI</p>
     */
    public $COSURI;

    /**
     * @var integer <p>对象大小，单位：字节</p>
     */
    public $Size;

    /**
     * @var string <p>对象的 ETag</p>
     */
    public $ETag;

    /**
     * @var integer <p>对象最后修改时间，秒级 UNIX 时间戳</p>
     */
    public $LastModified;

    /**
     * @param string $Key <p>对象 Key</p>
     * @param string $COSURI <p>TWeSee 直传对象或目录的 COS URI</p>
     * @param integer $Size <p>对象大小，单位：字节</p>
     * @param string $ETag <p>对象的 ETag</p>
     * @param integer $LastModified <p>对象最后修改时间，秒级 UNIX 时间戳</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("COSURI",$param) and $param["COSURI"] !== null) {
            $this->COSURI = $param["COSURI"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }
    }
}
