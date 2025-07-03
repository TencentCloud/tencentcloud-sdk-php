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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 素材信息
 *
 * @method string getMaterialId() 获取素材Id
 * @method void setMaterialId(string $MaterialId) 设置素材Id
 * @method integer getMaterialStatus() 获取素材状态

字段取值: 
0   审核中
1   人工审核通过
2   人工审核失败
3   申诉中
11  申诉成功
12  申诉失败
21  机器审核通过
22  机器审核失败
31  视频素材预处理成功，素材可用
32  视频素材预处理失败
33  角色不在视频中
 * @method void setMaterialStatus(integer $MaterialStatus) 设置素材状态

字段取值: 
0   审核中
1   人工审核通过
2   人工审核失败
3   申诉中
11  申诉成功
12  申诉失败
21  机器审核通过
22  机器审核失败
31  视频素材预处理成功，素材可用
32  视频素材预处理失败
33  角色不在视频中
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method array getMaterialFaceList() 获取人脸信息
 * @method void setMaterialFaceList(array $MaterialFaceList) 设置人脸信息
 * @method string getMaterialName() 获取素材名
 * @method void setMaterialName(string $MaterialName) 设置素材名
 * @method string getAuditResult() 获取审核原因
 * @method void setAuditResult(string $AuditResult) 设置审核原因
 */
class PublicMaterialInfos extends AbstractModel
{
    /**
     * @var string 素材Id
     */
    public $MaterialId;

    /**
     * @var integer 素材状态

字段取值: 
0   审核中
1   人工审核通过
2   人工审核失败
3   申诉中
11  申诉成功
12  申诉失败
21  机器审核通过
22  机器审核失败
31  视频素材预处理成功，素材可用
32  视频素材预处理失败
33  角色不在视频中
     */
    public $MaterialStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var array 人脸信息
     */
    public $MaterialFaceList;

    /**
     * @var string 素材名
     */
    public $MaterialName;

    /**
     * @var string 审核原因
     */
    public $AuditResult;

    /**
     * @param string $MaterialId 素材Id
     * @param integer $MaterialStatus 素材状态

字段取值: 
0   审核中
1   人工审核通过
2   人工审核失败
3   申诉中
11  申诉成功
12  申诉失败
21  机器审核通过
22  机器审核失败
31  视频素材预处理成功，素材可用
32  视频素材预处理失败
33  角色不在视频中
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param array $MaterialFaceList 人脸信息
     * @param string $MaterialName 素材名
     * @param string $AuditResult 审核原因
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("MaterialStatus",$param) and $param["MaterialStatus"] !== null) {
            $this->MaterialStatus = $param["MaterialStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MaterialFaceList",$param) and $param["MaterialFaceList"] !== null) {
            $this->MaterialFaceList = [];
            foreach ($param["MaterialFaceList"] as $key => $value){
                $obj = new MaterialFaces();
                $obj->deserialize($value);
                array_push($this->MaterialFaceList, $obj);
            }
        }

        if (array_key_exists("MaterialName",$param) and $param["MaterialName"] !== null) {
            $this->MaterialName = $param["MaterialName"];
        }

        if (array_key_exists("AuditResult",$param) and $param["AuditResult"] !== null) {
            $this->AuditResult = $param["AuditResult"];
        }
    }
}
