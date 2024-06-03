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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApiSecEventChange请求参数结构体
 *
 * @method string getMode() 获取变更状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
 * @method void setMode(string $Mode) 设置变更状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
 * @method string getUserName() 获取处理人
 * @method void setUserName(string $UserName) 设置处理人
 * @method string getRemark() 获取备注，有长度显示1k
 * @method void setRemark(string $Remark) 设置备注，有长度显示1k
 * @method array getEventIdList() 获取批量操作的事件列表
 * @method void setEventIdList(array $EventIdList) 设置批量操作的事件列表
 * @method array getApiNameList() 获取批量操作的api列表
 * @method void setApiNameList(array $ApiNameList) 设置批量操作的api列表
 * @method boolean getIsDelete() 获取判断是否删除，包括删除事件和删除资产
 * @method void setIsDelete(boolean $IsDelete) 设置判断是否删除，包括删除事件和删除资产
 * @method boolean getUpdateApiRemark() 获取判断是否是更新api的备注，更新api备注的时候，为true
 * @method void setUpdateApiRemark(boolean $UpdateApiRemark) 设置判断是否是更新api的备注，更新api备注的时候，为true
 */
class ModifyApiSecEventChangeRequest extends AbstractModel
{
    /**
     * @var string 变更状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
     */
    public $Mode;

    /**
     * @var string 处理人
     */
    public $UserName;

    /**
     * @var string 备注，有长度显示1k
     */
    public $Remark;

    /**
     * @var array 批量操作的事件列表
     */
    public $EventIdList;

    /**
     * @var array 批量操作的api列表
     */
    public $ApiNameList;

    /**
     * @var boolean 判断是否删除，包括删除事件和删除资产
     */
    public $IsDelete;

    /**
     * @var boolean 判断是否是更新api的备注，更新api备注的时候，为true
     */
    public $UpdateApiRemark;

    /**
     * @param string $Mode 变更状态，1:新发现，2，确认中，3，已确认，4，已下线，5，已忽略
     * @param string $UserName 处理人
     * @param string $Remark 备注，有长度显示1k
     * @param array $EventIdList 批量操作的事件列表
     * @param array $ApiNameList 批量操作的api列表
     * @param boolean $IsDelete 判断是否删除，包括删除事件和删除资产
     * @param boolean $UpdateApiRemark 判断是否是更新api的备注，更新api备注的时候，为true
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EventIdList",$param) and $param["EventIdList"] !== null) {
            $this->EventIdList = $param["EventIdList"];
        }

        if (array_key_exists("ApiNameList",$param) and $param["ApiNameList"] !== null) {
            $this->ApiNameList = [];
            foreach ($param["ApiNameList"] as $key => $value){
                $obj = new ApiSecKey();
                $obj->deserialize($value);
                array_push($this->ApiNameList, $obj);
            }
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }

        if (array_key_exists("UpdateApiRemark",$param) and $param["UpdateApiRemark"] !== null) {
            $this->UpdateApiRemark = $param["UpdateApiRemark"];
        }
    }
}
