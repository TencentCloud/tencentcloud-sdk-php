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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStorage请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播专业版[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播专业版[应用](/document/product/266/14574) ID。</b>
 * @method string getStorageRegion() 获取存储地域，必须是系统支持地域。
通过 [DescribeStorageRegions](https://cloud.tencent.com/document/product/266/72480) 接口可以查询到所有存储地域及已经开通存储桶的地域。
 * @method void setStorageRegion(string $StorageRegion) 设置存储地域，必须是系统支持地域。
通过 [DescribeStorageRegions](https://cloud.tencent.com/document/product/266/72480) 接口可以查询到所有存储地域及已经开通存储桶的地域。
 * @method string getStorageName() 获取存储名称。
<li>仅支持小写英文字母、数字、中划线 “-” 及其组合；</li>
<li>存储命名不能以 “-” 开头或结尾；</li>
<li>存储命名最大长度为 64 字符。</li>
 * @method void setStorageName(string $StorageName) 设置存储名称。
<li>仅支持小写英文字母、数字、中划线 “-” 及其组合；</li>
<li>存储命名不能以 “-” 开头或结尾；</li>
<li>存储命名最大长度为 64 字符。</li>
 */
class CreateStorageRequest extends AbstractModel
{
    /**
     * @var integer <b>点播专业版[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 存储地域，必须是系统支持地域。
通过 [DescribeStorageRegions](https://cloud.tencent.com/document/product/266/72480) 接口可以查询到所有存储地域及已经开通存储桶的地域。
     */
    public $StorageRegion;

    /**
     * @var string 存储名称。
<li>仅支持小写英文字母、数字、中划线 “-” 及其组合；</li>
<li>存储命名不能以 “-” 开头或结尾；</li>
<li>存储命名最大长度为 64 字符。</li>
     */
    public $StorageName;

    /**
     * @param integer $SubAppId <b>点播专业版[应用](/document/product/266/14574) ID。</b>
     * @param string $StorageRegion 存储地域，必须是系统支持地域。
通过 [DescribeStorageRegions](https://cloud.tencent.com/document/product/266/72480) 接口可以查询到所有存储地域及已经开通存储桶的地域。
     * @param string $StorageName 存储名称。
<li>仅支持小写英文字母、数字、中划线 “-” 及其组合；</li>
<li>存储命名不能以 “-” 开头或结尾；</li>
<li>存储命名最大长度为 64 字符。</li>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }
    }
}
