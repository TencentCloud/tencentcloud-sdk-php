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
 * DeleteConsoleSharing请求参数结构体
 *
 * @method string getSharingId() 获取免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
 * @method void setSharingId(string $SharingId) 设置免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
 */
class DeleteConsoleSharingRequest extends AbstractModel
{
    /**
     * @var string 免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
     */
    public $SharingId;

    /**
     * @param string $SharingId 免密分享Id。
- 通过 [获取免密分享列表](https://cloud.tencent.com/document/product/614/109798) 获取免密分享Id。 
- 通过 [创建免密分享](https://cloud.tencent.com/document/product/614/109800) 获取免密分享Id。
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
    }
}
