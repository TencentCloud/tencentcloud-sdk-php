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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警处理记录
 *
 * @method integer getId() 获取告警处理记录id

 * @method void setId(integer $Id) 设置告警处理记录id

 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getOperationType() 获取操作类型
 * @method void setOperationType(string $OperationType) 设置操作类型
 * @method string getTime() 获取处理时间
 * @method void setTime(string $Time) 设置处理时间
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method array getFileSet() 获取文件列表

 * @method void setFileSet(array $FileSet) 设置文件列表

 * @method integer getAppId() 获取应用appid
 * @method void setAppId(integer $AppId) 设置应用appid
 * @method string getExtendOne() 获取扩展字段1，存非孪生中台用户id

 * @method void setExtendOne(string $ExtendOne) 设置扩展字段1，存非孪生中台用户id
 */
class HandleRecordInfo extends AbstractModel
{
    /**
     * @var integer 告警处理记录id

     */
    public $Id;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 操作类型
     */
    public $OperationType;

    /**
     * @var string 处理时间
     */
    public $Time;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var array 文件列表

     */
    public $FileSet;

    /**
     * @var integer 应用appid
     */
    public $AppId;

    /**
     * @var string 扩展字段1，存非孪生中台用户id

     */
    public $ExtendOne;

    /**
     * @param integer $Id 告警处理记录id

     * @param string $Description 描述
     * @param string $Name 名称
     * @param string $OperationType 操作类型
     * @param string $Time 处理时间
     * @param string $Type 类型
     * @param array $FileSet 文件列表

     * @param integer $AppId 应用appid
     * @param string $ExtendOne 扩展字段1，存非孪生中台用户id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileSet",$param) and $param["FileSet"] !== null) {
            $this->FileSet = [];
            foreach ($param["FileSet"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileSet, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ExtendOne",$param) and $param["ExtendOne"] !== null) {
            $this->ExtendOne = $param["ExtendOne"];
        }
    }
}
