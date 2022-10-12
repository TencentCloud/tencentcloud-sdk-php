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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCRWhiteList请求参数结构体
 *
 * @method integer getWhiteListId() 获取该字段已废弃，白名单ID
 * @method void setWhiteListId(integer $WhiteListId) 设置该字段已废弃，白名单ID
 * @method string getPlatForm() 获取该字段已废弃，平台名称
 * @method void setPlatForm(string $PlatForm) 设置该字段已废弃，平台名称
 * @method string getPlatUrl() 获取该字段已废弃，平台站点链接
 * @method void setPlatUrl(string $PlatUrl) 设置该字段已废弃，平台站点链接
 * @method string getAuthorId() 获取该字段已废弃，作者ID
 * @method void setAuthorId(string $AuthorId) 设置该字段已废弃，作者ID
 * @method integer getWorksId() 获取该字段已废弃，作品ID
 * @method void setWorksId(integer $WorksId) 设置该字段已废弃，作品ID
 * @method integer getWorkId() 获取作品ID
 * @method void setWorkId(integer $WorkId) 设置作品ID
 * @method string getWhiteSites() 获取白名单列表，以\n分割
 * @method void setWhiteSites(string $WhiteSites) 设置白名单列表，以\n分割
 */
class ModifyCRWhiteListRequest extends AbstractModel
{
    /**
     * @var integer 该字段已废弃，白名单ID
     */
    public $WhiteListId;

    /**
     * @var string 该字段已废弃，平台名称
     */
    public $PlatForm;

    /**
     * @var string 该字段已废弃，平台站点链接
     */
    public $PlatUrl;

    /**
     * @var string 该字段已废弃，作者ID
     */
    public $AuthorId;

    /**
     * @var integer 该字段已废弃，作品ID
     */
    public $WorksId;

    /**
     * @var integer 作品ID
     */
    public $WorkId;

    /**
     * @var string 白名单列表，以\n分割
     */
    public $WhiteSites;

    /**
     * @param integer $WhiteListId 该字段已废弃，白名单ID
     * @param string $PlatForm 该字段已废弃，平台名称
     * @param string $PlatUrl 该字段已废弃，平台站点链接
     * @param string $AuthorId 该字段已废弃，作者ID
     * @param integer $WorksId 该字段已废弃，作品ID
     * @param integer $WorkId 作品ID
     * @param string $WhiteSites 白名单列表，以\n分割
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
        if (array_key_exists("WhiteListId",$param) and $param["WhiteListId"] !== null) {
            $this->WhiteListId = $param["WhiteListId"];
        }

        if (array_key_exists("PlatForm",$param) and $param["PlatForm"] !== null) {
            $this->PlatForm = $param["PlatForm"];
        }

        if (array_key_exists("PlatUrl",$param) and $param["PlatUrl"] !== null) {
            $this->PlatUrl = $param["PlatUrl"];
        }

        if (array_key_exists("AuthorId",$param) and $param["AuthorId"] !== null) {
            $this->AuthorId = $param["AuthorId"];
        }

        if (array_key_exists("WorksId",$param) and $param["WorksId"] !== null) {
            $this->WorksId = $param["WorksId"];
        }

        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("WhiteSites",$param) and $param["WhiteSites"] !== null) {
            $this->WhiteSites = $param["WhiteSites"];
        }
    }
}
