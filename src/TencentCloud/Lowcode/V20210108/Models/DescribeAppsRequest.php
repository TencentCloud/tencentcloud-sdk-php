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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApps请求参数结构体
 *
 * @method integer getLimit() 获取分页每页个数
 * @method void setLimit(integer $Limit) 设置分页每页个数
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getKeyword() 获取搜索关键词
 * @method void setKeyword(string $Keyword) 设置搜索关键词
 * @method array getAppIds() 获取应用id
 * @method void setAppIds(array $AppIds) 设置应用id
 * @method string getChannel() 获取来源类型
 * @method void setChannel(string $Channel) 设置来源类型
 * @method integer getType() 获取1-自定义应用；2-模型应用
 * @method void setType(integer $Type) 设置1-自定义应用；2-模型应用
 * @method boolean getFavorite() 获取应用是否收藏
 * @method void setFavorite(boolean $Favorite) 设置应用是否收藏
 */
class DescribeAppsRequest extends AbstractModel
{
    /**
     * @var integer 分页每页个数
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 搜索关键词
     */
    public $Keyword;

    /**
     * @var array 应用id
     */
    public $AppIds;

    /**
     * @var string 来源类型
     */
    public $Channel;

    /**
     * @var integer 1-自定义应用；2-模型应用
     */
    public $Type;

    /**
     * @var boolean 应用是否收藏
     */
    public $Favorite;

    /**
     * @param integer $Limit 分页每页个数
     * @param integer $Offset 分页Offset
     * @param string $EnvId 环境id
     * @param string $Keyword 搜索关键词
     * @param array $AppIds 应用id
     * @param string $Channel 来源类型
     * @param integer $Type 1-自定义应用；2-模型应用
     * @param boolean $Favorite 应用是否收藏
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AppIds",$param) and $param["AppIds"] !== null) {
            $this->AppIds = $param["AppIds"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Favorite",$param) and $param["Favorite"] !== null) {
            $this->Favorite = $param["Favorite"];
        }
    }
}
