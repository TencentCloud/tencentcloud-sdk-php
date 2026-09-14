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
 * TWeSee 直传对象列举结果
 *
 * @method array getContents() 获取<p>对象列表</p>
 * @method void setContents(array $Contents) 设置<p>对象列表</p>
 * @method array getCommonPrefixes() 获取<p>子目录路径列表</p>
 * @method void setCommonPrefixes(array $CommonPrefixes) 设置<p>子目录路径列表</p>
 * @method string getDelimiter() 获取<p>本次列举使用的目录分隔符</p>
 * @method void setDelimiter(string $Delimiter) 设置<p>本次列举使用的目录分隔符</p>
 * @method boolean getIsTruncated() 获取<p>是否还有后续分页数据</p>
 * @method void setIsTruncated(boolean $IsTruncated) 设置<p>是否还有后续分页数据</p>
 * @method string getMarker() 获取<p>本次列举使用的分页标记</p>
 * @method void setMarker(string $Marker) 设置<p>本次列举使用的分页标记</p>
 * @method integer getMaxKeys() 获取<p>本次列举的最大对象数量</p>
 * @method void setMaxKeys(integer $MaxKeys) 设置<p>本次列举的最大对象数量</p>
 * @method string getNextMarker() 获取<p>下一页的分页标记</p>
 * @method void setNextMarker(string $NextMarker) 设置<p>下一页的分页标记</p>
 * @method string getPrefix() 获取<p>本次列举的对象路径前缀</p>
 * @method void setPrefix(string $Prefix) 设置<p>本次列举的对象路径前缀</p>
 */
class SeeObjectListing extends AbstractModel
{
    /**
     * @var array <p>对象列表</p>
     */
    public $Contents;

    /**
     * @var array <p>子目录路径列表</p>
     */
    public $CommonPrefixes;

    /**
     * @var string <p>本次列举使用的目录分隔符</p>
     */
    public $Delimiter;

    /**
     * @var boolean <p>是否还有后续分页数据</p>
     */
    public $IsTruncated;

    /**
     * @var string <p>本次列举使用的分页标记</p>
     */
    public $Marker;

    /**
     * @var integer <p>本次列举的最大对象数量</p>
     */
    public $MaxKeys;

    /**
     * @var string <p>下一页的分页标记</p>
     */
    public $NextMarker;

    /**
     * @var string <p>本次列举的对象路径前缀</p>
     */
    public $Prefix;

    /**
     * @param array $Contents <p>对象列表</p>
     * @param array $CommonPrefixes <p>子目录路径列表</p>
     * @param string $Delimiter <p>本次列举使用的目录分隔符</p>
     * @param boolean $IsTruncated <p>是否还有后续分页数据</p>
     * @param string $Marker <p>本次列举使用的分页标记</p>
     * @param integer $MaxKeys <p>本次列举的最大对象数量</p>
     * @param string $NextMarker <p>下一页的分页标记</p>
     * @param string $Prefix <p>本次列举的对象路径前缀</p>
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
        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new SeeObjectSummary();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }

        if (array_key_exists("CommonPrefixes",$param) and $param["CommonPrefixes"] !== null) {
            $this->CommonPrefixes = $param["CommonPrefixes"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("IsTruncated",$param) and $param["IsTruncated"] !== null) {
            $this->IsTruncated = $param["IsTruncated"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("MaxKeys",$param) and $param["MaxKeys"] !== null) {
            $this->MaxKeys = $param["MaxKeys"];
        }

        if (array_key_exists("NextMarker",$param) and $param["NextMarker"] !== null) {
            $this->NextMarker = $param["NextMarker"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }
    }
}
