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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全播报文章详情
 *
 * @method string getTitle() 获取文章名字
 * @method void setTitle(string $Title) 设置文章名字
 * @method integer getGotoType() 获取跳转位置：0=不跳转，1=文件查杀，2=漏洞扫描，3=安全基线
 * @method void setGotoType(integer $GotoType) 设置跳转位置：0=不跳转，1=文件查杀，2=漏洞扫描，3=安全基线
 * @method string getSubtitle() 获取副标题
 * @method void setSubtitle(string $Subtitle) 设置副标题
 * @method string getCreateTime() 获取发布时间
 * @method void setCreateTime(string $CreateTime) 设置发布时间
 * @method string getContent() 获取富文本内容信息
 * @method void setContent(string $Content) 设置富文本内容信息
 * @method integer getId() 获取文章唯一Id
 * @method void setId(integer $Id) 设置文章唯一Id
 * @method integer getType() 获取类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
 * @method void setType(integer $Type) 设置类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
 */
class BroadcastInfo extends AbstractModel
{
    /**
     * @var string 文章名字
     */
    public $Title;

    /**
     * @var integer 跳转位置：0=不跳转，1=文件查杀，2=漏洞扫描，3=安全基线
     */
    public $GotoType;

    /**
     * @var string 副标题
     */
    public $Subtitle;

    /**
     * @var string 发布时间
     */
    public $CreateTime;

    /**
     * @var string 富文本内容信息
     */
    public $Content;

    /**
     * @var integer 文章唯一Id
     */
    public $Id;

    /**
     * @var integer 类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
     */
    public $Type;

    /**
     * @param string $Title 文章名字
     * @param integer $GotoType 跳转位置：0=不跳转，1=文件查杀，2=漏洞扫描，3=安全基线
     * @param string $Subtitle 副标题
     * @param string $CreateTime 发布时间
     * @param string $Content 富文本内容信息
     * @param integer $Id 文章唯一Id
     * @param integer $Type 类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("GotoType",$param) and $param["GotoType"] !== null) {
            $this->GotoType = $param["GotoType"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = $param["Subtitle"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
