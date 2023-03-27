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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplication请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置应用SdkAppId
 * @method string getAppName() 获取App名字
 * @method void setAppName(string $AppName) 设置App名字
 * @method string getSKey() 获取创建IM应用需要的SKey
 * @method void setSKey(string $SKey) 设置创建IM应用需要的SKey
 * @method string getTinyId() 获取创建IM应用需要的TinyId
 * @method void setTinyId(string $TinyId) 设置创建IM应用需要的TinyId
 * @method array getTagList() 获取需要绑定的标签列表
 * @method void setTagList(array $TagList) 设置需要绑定的标签列表
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var integer 应用SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string App名字
     */
    public $AppName;

    /**
     * @var string 创建IM应用需要的SKey
     */
    public $SKey;

    /**
     * @var string 创建IM应用需要的TinyId
     */
    public $TinyId;

    /**
     * @var array 需要绑定的标签列表
     */
    public $TagList;

    /**
     * @param integer $SdkAppId 应用SdkAppId
     * @param string $AppName App名字
     * @param string $SKey 创建IM应用需要的SKey
     * @param string $TinyId 创建IM应用需要的TinyId
     * @param array $TagList 需要绑定的标签列表
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("SKey",$param) and $param["SKey"] !== null) {
            $this->SKey = $param["SKey"];
        }

        if (array_key_exists("TinyId",$param) and $param["TinyId"] !== null) {
            $this->TinyId = $param["TinyId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
