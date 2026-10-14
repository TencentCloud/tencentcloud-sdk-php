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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoSnapshotConfig请求参数结构体
 *
 * @method string getName() 获取<p>截图配置名称</p><p>入参限制：中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
 * @method void setName(string $Name) 设置<p>截图配置名称</p><p>入参限制：中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
 * @method string getTemplateId() 获取<p>截图模板Id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>截图模板Id</p>
 * @method integer getFileExpires() 获取<p>图片文件的热存储天数</p><p>枚举值：</p><ul><li>7： 7天</li><li>15： 15天</li><li>30： 30天</li><li>60： 60天</li><li>90： 90天</li><li>180： 180天</li><li>270： 270天</li><li>360： 360天</li><li>540： 540天</li><li>720： 720天</li><li>900： 900天</li><li>1080： 1080天</li></ul>
 * @method void setFileExpires(integer $FileExpires) 设置<p>图片文件的热存储天数</p><p>枚举值：</p><ul><li>7： 7天</li><li>15： 15天</li><li>30： 30天</li><li>60： 60天</li><li>90： 90天</li><li>180： 180天</li><li>270： 270天</li><li>360： 360天</li><li>540： 540天</li><li>720： 720天</li><li>900： 900天</li><li>1080： 1080天</li></ul>
 * @method CallbackURL getCallback() 获取<p>截图结果回调地址</p>
 * @method void setCallback(CallbackURL $Callback) 设置<p>截图结果回调地址</p>
 */
class CreateVideoSnapshotConfigRequest extends AbstractModel
{
    /**
     * @var string <p>截图配置名称</p><p>入参限制：中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
     */
    public $Name;

    /**
     * @var string <p>截图模板Id</p>
     */
    public $TemplateId;

    /**
     * @var integer <p>图片文件的热存储天数</p><p>枚举值：</p><ul><li>7： 7天</li><li>15： 15天</li><li>30： 30天</li><li>60： 60天</li><li>90： 90天</li><li>180： 180天</li><li>270： 270天</li><li>360： 360天</li><li>540： 540天</li><li>720： 720天</li><li>900： 900天</li><li>1080： 1080天</li></ul>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>截图结果回调地址</p>
     */
    public $Callback;

    /**
     * @param string $Name <p>截图配置名称</p><p>入参限制：中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
     * @param string $TemplateId <p>截图模板Id</p>
     * @param integer $FileExpires <p>图片文件的热存储天数</p><p>枚举值：</p><ul><li>7： 7天</li><li>15： 15天</li><li>30： 30天</li><li>60： 60天</li><li>90： 90天</li><li>180： 180天</li><li>270： 270天</li><li>360： 360天</li><li>540： 540天</li><li>720： 720天</li><li>900： 900天</li><li>1080： 1080天</li></ul>
     * @param CallbackURL $Callback <p>截图结果回调地址</p>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }
    }
}
