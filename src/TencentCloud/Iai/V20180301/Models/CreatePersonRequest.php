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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupId() 获取待加入的人员库ID。
 * @method void setGroupId(string $GroupId) 设置待加入的人员库ID。
 * @method string getPersonName() 获取人员名称。[1，60]个字符，可修改，可重复。
 * @method void setPersonName(string $PersonName) 设置人员名称。[1，60]个字符，可修改，可重复。
 * @method string getPersonId() 获取人员ID，单个腾讯云账号下不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
 * @method void setPersonId(string $PersonId) 设置人员ID，单个腾讯云账号下不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
 * @method integer getGender() 获取0代表未填写，1代表男性，2代表女性。
 * @method void setGender(integer $Gender) 设置0代表未填写，1代表男性，2代表女性。
 * @method array getPersonExDescriptionInfos() 获取人员描述字段内容，key-value。[0，60]个字符，可修改，可重复。
 * @method void setPersonExDescriptionInfos(array $PersonExDescriptionInfos) 设置人员描述字段内容，key-value。[0，60]个字符，可修改，可重复。
 * @method string getImage() 获取图片 base64 数据，base64 编码后大小不可超过5M。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImage(string $Image) 设置图片 base64 数据，base64 编码后大小不可超过5M。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method string getUrl() 获取图片的 Url 。对应图片 base64 编码后大小不可超过5M。
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setUrl(string $Url) 设置图片的 Url 。对应图片 base64 编码后大小不可超过5M。
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 */

/**
 *CreatePerson请求参数结构体
 */
class CreatePersonRequest extends AbstractModel
{
    /**
     * @var string 待加入的人员库ID。
     */
    public $GroupId;

    /**
     * @var string 人员名称。[1，60]个字符，可修改，可重复。
     */
    public $PersonName;

    /**
     * @var string 人员ID，单个腾讯云账号下不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
     */
    public $PersonId;

    /**
     * @var integer 0代表未填写，1代表男性，2代表女性。
     */
    public $Gender;

    /**
     * @var array 人员描述字段内容，key-value。[0，60]个字符，可修改，可重复。
     */
    public $PersonExDescriptionInfos;

    /**
     * @var string 图片 base64 数据，base64 编码后大小不可超过5M。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Image;

    /**
     * @var string 图片的 Url 。对应图片 base64 编码后大小不可超过5M。
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Url;
    /**
     * @param string $GroupId 待加入的人员库ID。
     * @param string $PersonName 人员名称。[1，60]个字符，可修改，可重复。
     * @param string $PersonId 人员ID，单个腾讯云账号下不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
     * @param integer $Gender 0代表未填写，1代表男性，2代表女性。
     * @param array $PersonExDescriptionInfos 人员描述字段内容，key-value。[0，60]个字符，可修改，可重复。
     * @param string $Image 图片 base64 数据，base64 编码后大小不可超过5M。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param string $Url 图片的 Url 。对应图片 base64 编码后大小不可超过5M。
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("PersonExDescriptionInfos",$param) and $param["PersonExDescriptionInfos"] !== null) {
            $this->PersonExDescriptionInfos = [];
            foreach ($param["PersonExDescriptionInfos"] as $key => $value){
                $obj = new PersonExDescriptionInfo();
                $obj->deserialize($value);
                array_push($this->PersonExDescriptionInfos, $obj);
            }
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
