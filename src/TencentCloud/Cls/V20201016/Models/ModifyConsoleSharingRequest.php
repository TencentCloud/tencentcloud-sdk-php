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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConsoleSharing请求参数结构体
 *
 * @method string getSharingId() 获取免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
 * @method void setSharingId(string $SharingId) 设置免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
 * @method integer getDurationMilliseconds() 获取指定分享链接有效期，单位：毫秒，最长可设定有效期为30天
 * @method void setDurationMilliseconds(integer $DurationMilliseconds) 设置指定分享链接有效期，单位：毫秒，最长可设定有效期为30天
 */
class ModifyConsoleSharingRequest extends AbstractModel
{
    /**
     * @var string 免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
     */
    public $SharingId;

    /**
     * @var integer 指定分享链接有效期，单位：毫秒，最长可设定有效期为30天
     */
    public $DurationMilliseconds;

    /**
     * @param string $SharingId 免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
     * @param integer $DurationMilliseconds 指定分享链接有效期，单位：毫秒，最长可设定有效期为30天
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
        if (array_key_exists("SharingId",$param) and $param["SharingId"] !== null) {
            $this->SharingId = $param["SharingId"];
        }

        if (array_key_exists("DurationMilliseconds",$param) and $param["DurationMilliseconds"] !== null) {
            $this->DurationMilliseconds = $param["DurationMilliseconds"];
        }
    }
}
