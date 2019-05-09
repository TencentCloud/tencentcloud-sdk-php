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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInputType() 获取输入视频的类型，可以取的值为  File，Stream 两种。
 * @method void setInputType(string $InputType) 设置输入视频的类型，可以取的值为  File，Stream 两种。
 * @method array getFileInfos() 获取输入的视频文件信息，当 InputType 为 File 时必填。
 * @method void setFileInfos(array $FileInfos) 设置输入的视频文件信息，当 InputType 为 File 时必填。
 * @method array getStreamInfos() 获取输入的流信息，当 InputType 为 Stream 时必填。
 * @method void setStreamInfos(array $StreamInfos) 设置输入的流信息，当 InputType 为 Stream 时必填。
 * @method string getProcedureName() 获取[任务流模板](/document/product/266/11700#.E4.BB.BB.E5.8A.A1.E6.B5.81.E6.A8.A1.E6.9D.BF)名字，如果要对生成的新视频执行任务流时填写。
 * @method void setProcedureName(string $ProcedureName) 设置[任务流模板](/document/product/266/11700#.E4.BB.BB.E5.8A.A1.E6.B5.81.E6.A8.A1.E6.9D.BF)名字，如果要对生成的新视频执行任务流时填写。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */

/**
 *EditMedia请求参数结构体
 */
class EditMediaRequest extends AbstractModel
{
    /**
     * @var string 输入视频的类型，可以取的值为  File，Stream 两种。
     */
    public $InputType;

    /**
     * @var array 输入的视频文件信息，当 InputType 为 File 时必填。
     */
    public $FileInfos;

    /**
     * @var array 输入的流信息，当 InputType 为 Stream 时必填。
     */
    public $StreamInfos;

    /**
     * @var string [任务流模板](/document/product/266/11700#.E4.BB.BB.E5.8A.A1.E6.B5.81.E6.A8.A1.E6.9D.BF)名字，如果要对生成的新视频执行任务流时填写。
     */
    public $ProcedureName;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;
    /**
     * @param string $InputType 输入视频的类型，可以取的值为  File，Stream 两种。
     * @param array $FileInfos 输入的视频文件信息，当 InputType 为 File 时必填。
     * @param array $StreamInfos 输入的流信息，当 InputType 为 Stream 时必填。
     * @param string $ProcedureName [任务流模板](/document/product/266/11700#.E4.BB.BB.E5.8A.A1.E6.B5.81.E6.A8.A1.E6.9D.BF)名字，如果要对生成的新视频执行任务流时填写。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new EditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new EditMediaStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("ProcedureName",$param) and $param["ProcedureName"] !== null) {
            $this->ProcedureName = $param["ProcedureName"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
