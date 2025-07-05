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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用logo
 *
 * @method string getFileId() 获取logo图片对应的fileId
 * @method void setFileId(string $FileId) 设置logo图片对应的fileId
 * @method string getUrl() 获取logo图片地址
 * @method void setUrl(string $Url) 设置logo图片地址
 */
class ApplicationLogo extends AbstractModel
{
    /**
     * @var string logo图片对应的fileId
     */
    public $FileId;

    /**
     * @var string logo图片地址
     */
    public $Url;

    /**
     * @param string $FileId logo图片对应的fileId
     * @param string $Url logo图片地址
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
