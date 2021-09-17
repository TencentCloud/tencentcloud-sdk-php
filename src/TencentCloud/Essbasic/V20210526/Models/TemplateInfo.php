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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (TemplateInfo) 用于描述模板的信息。
 *
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method string getTemplateName() 获取模板名字
 * @method void setTemplateName(string $TemplateName) 设置模板名字
 * @method string getDescription() 获取模板描述信息
 * @method void setDescription(string $Description) 设置模板描述信息
 * @method array getComponents() 获取模板控件信息结构
 * @method void setComponents(array $Components) 设置模板控件信息结构
 * @method array getSignComponents() 获取签署区模板信息结构
 * @method void setSignComponents(array $SignComponents) 设置签署区模板信息结构
 * @method string getCreator() 获取模板的创建者信息
 * @method void setCreator(string $Creator) 设置模板的创建者信息
 * @method integer getCreatedOn() 获取模板创建的时间戳（精确到秒）
 * @method void setCreatedOn(integer $CreatedOn) 设置模板创建的时间戳（精确到秒）
 * @method integer getTemplateType() 获取模板类型：1-静默签；2-静默签授权；3-普通模版
 * @method void setTemplateType(integer $TemplateType) 设置模板类型：1-静默签；2-静默签授权；3-普通模版
 * @method array getRecipients() 获取模板中的流程参与人信息
 * @method void setRecipients(array $Recipients) 设置模板中的流程参与人信息
 */
class TemplateInfo extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var string 模板名字
     */
    public $TemplateName;

    /**
     * @var string 模板描述信息
     */
    public $Description;

    /**
     * @var array 模板控件信息结构
     */
    public $Components;

    /**
     * @var array 签署区模板信息结构
     */
    public $SignComponents;

    /**
     * @var string 模板的创建者信息
     */
    public $Creator;

    /**
     * @var integer 模板创建的时间戳（精确到秒）
     */
    public $CreatedOn;

    /**
     * @var integer 模板类型：1-静默签；2-静默签授权；3-普通模版
     */
    public $TemplateType;

    /**
     * @var array 模板中的流程参与人信息
     */
    public $Recipients;

    /**
     * @param string $TemplateId 模板ID
     * @param string $TemplateName 模板名字
     * @param string $Description 模板描述信息
     * @param array $Components 模板控件信息结构
     * @param array $SignComponents 签署区模板信息结构
     * @param string $Creator 模板的创建者信息
     * @param integer $CreatedOn 模板创建的时间戳（精确到秒）
     * @param integer $TemplateType 模板类型：1-静默签；2-静默签授权；3-普通模版
     * @param array $Recipients 模板中的流程参与人信息
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("Recipients",$param) and $param["Recipients"] !== null) {
            $this->Recipients = [];
            foreach ($param["Recipients"] as $key => $value){
                $obj = new Recipient();
                $obj->deserialize($value);
                array_push($this->Recipients, $obj);
            }
        }
    }
}
