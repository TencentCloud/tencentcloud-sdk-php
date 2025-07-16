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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播审核删除关键词结果详情。
 *
 * @method string getKeywordId() 获取关键词 Id。
 * @method void setKeywordId(string $KeywordId) 设置关键词 Id。
 * @method string getContent() 获取关键词内容。
 * @method void setContent(string $Content) 设置关键词内容。
 * @method boolean getDeleted() 获取是否删除成功。
 * @method void setDeleted(boolean $Deleted) 设置是否删除成功。
 * @method string getError() 获取如果删除失败，错误信息。
 * @method void setError(string $Error) 设置如果删除失败，错误信息。
 */
class AuditKeywordDeleteDetail extends AbstractModel
{
    /**
     * @var string 关键词 Id。
     */
    public $KeywordId;

    /**
     * @var string 关键词内容。
     */
    public $Content;

    /**
     * @var boolean 是否删除成功。
     */
    public $Deleted;

    /**
     * @var string 如果删除失败，错误信息。
     */
    public $Error;

    /**
     * @param string $KeywordId 关键词 Id。
     * @param string $Content 关键词内容。
     * @param boolean $Deleted 是否删除成功。
     * @param string $Error 如果删除失败，错误信息。
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
        if (array_key_exists("KeywordId",$param) and $param["KeywordId"] !== null) {
            $this->KeywordId = $param["KeywordId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
