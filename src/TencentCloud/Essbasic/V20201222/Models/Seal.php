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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (Seal) 用于描述电子印章的信息。
 *
 * @method string getSealId() 获取电子印章ID
 * @method void setSealId(string $SealId) 设置电子印章ID
 * @method string getSealName() 获取电子印章名称
 * @method void setSealName(string $SealName) 设置电子印章名称
 * @method string getSealType() 获取电子印章类型
 * @method void setSealType(string $SealType) 设置电子印章类型
 * @method string getSealSource() 获取电子印章来源：
CREATE - 通过图片上传
GENERATE - 通过文字生成
 * @method void setSealSource(string $SealSource) 设置电子印章来源：
CREATE - 通过图片上传
GENERATE - 通过文字生成
 * @method Caller getCreator() 获取电子印章创建者
 * @method void setCreator(Caller $Creator) 设置电子印章创建者
 * @method integer getCreatedOn() 获取电子印章创建时间戳
 * @method void setCreatedOn(integer $CreatedOn) 设置电子印章创建时间戳
 * @method string getUserId() 获取电子印章所有人
 * @method void setUserId(string $UserId) 设置电子印章所有人
 * @method FileUrl getFileUrl() 获取电子印章URL
 * @method void setFileUrl(FileUrl $FileUrl) 设置电子印章URL
 * @method boolean getDefaultSeal() 获取是否为默认印章，false-非默认，true-默认
 * @method void setDefaultSeal(boolean $DefaultSeal) 设置是否为默认印章，false-非默认，true-默认
 */
class Seal extends AbstractModel
{
    /**
     * @var string 电子印章ID
     */
    public $SealId;

    /**
     * @var string 电子印章名称
     */
    public $SealName;

    /**
     * @var string 电子印章类型
     */
    public $SealType;

    /**
     * @var string 电子印章来源：
CREATE - 通过图片上传
GENERATE - 通过文字生成
     */
    public $SealSource;

    /**
     * @var Caller 电子印章创建者
     */
    public $Creator;

    /**
     * @var integer 电子印章创建时间戳
     */
    public $CreatedOn;

    /**
     * @var string 电子印章所有人
     */
    public $UserId;

    /**
     * @var FileUrl 电子印章URL
     */
    public $FileUrl;

    /**
     * @var boolean 是否为默认印章，false-非默认，true-默认
     */
    public $DefaultSeal;

    /**
     * @param string $SealId 电子印章ID
     * @param string $SealName 电子印章名称
     * @param string $SealType 电子印章类型
     * @param string $SealSource 电子印章来源：
CREATE - 通过图片上传
GENERATE - 通过文字生成
     * @param Caller $Creator 电子印章创建者
     * @param integer $CreatedOn 电子印章创建时间戳
     * @param string $UserId 电子印章所有人
     * @param FileUrl $FileUrl 电子印章URL
     * @param boolean $DefaultSeal 是否为默认印章，false-非默认，true-默认
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
        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("SealSource",$param) and $param["SealSource"] !== null) {
            $this->SealSource = $param["SealSource"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new Caller();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = new FileUrl();
            $this->FileUrl->deserialize($param["FileUrl"]);
        }

        if (array_key_exists("DefaultSeal",$param) and $param["DefaultSeal"] !== null) {
            $this->DefaultSeal = $param["DefaultSeal"];
        }
    }
}
