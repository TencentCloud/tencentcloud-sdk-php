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
 * 知识库信息
 *
 * @method string getName() 获取知识库标识
 * @method void setName(string $Name) 设置知识库标识
 * @method string getTitle() 获取知识库名称
 * @method void setTitle(string $Title) 设置知识库名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getActive() 获取状态，
NOT_ENABLED未启用
ENABLED 已启用
 * @method void setActive(string $Active) 设置状态，
NOT_ENABLED未启用
ENABLED 已启用
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getMeta() 获取知识库的meta信息
 * @method void setMeta(string $Meta) 设置知识库的meta信息
 * @method string getTotalSize() 获取知识库容量,单位字节
 * @method void setTotalSize(string $TotalSize) 设置知识库容量,单位字节
 */
class KnowledgeSet extends AbstractModel
{
    /**
     * @var string 知识库标识
     */
    public $Name;

    /**
     * @var string 知识库名称
     */
    public $Title;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 状态，
NOT_ENABLED未启用
ENABLED 已启用
     */
    public $Active;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 知识库的meta信息
     */
    public $Meta;

    /**
     * @var string 知识库容量,单位字节
     */
    public $TotalSize;

    /**
     * @param string $Name 知识库标识
     * @param string $Title 知识库名称
     * @param string $Desc 描述
     * @param string $Active 状态，
NOT_ENABLED未启用
ENABLED 已启用
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Meta 知识库的meta信息
     * @param string $TotalSize 知识库容量,单位字节
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = $param["Meta"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
